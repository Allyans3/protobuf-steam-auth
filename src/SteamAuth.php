<?php

namespace SteamAuth;

use Curl\Curl;
use DateTime;
use DateTimeZone;
use Exception;
use SteamAuth\Configs\SteamConfig;
use SteamAuth\Exceptions\SteamErrorException;
use SteamAuth\pb2\EAuthSessionGuardType;
use SteamAuth\pb2\EAuthTokenPlatformType;
use SteamAuth\RSA\Crypt\Crypt_RSA;
use SteamAuth\RSA\Math\MathBigInteger;
use SteamAuth\Exceptions\SteamResponseException;
use SteamAuth\Traits\AuthenticatorLinkerMethods;
use SteamAuth\Traits\CookieMethods;
use SteamAuth\Traits\SteamAuthMethods;
use SteamAuth\Traits\UsefulMethods;
use SteamTotp\SteamTotp;

class SteamAuth
{
    use AuthenticatorLinkerMethods, CookieMethods, UsefulMethods, SteamAuthMethods;

    private $login;
    private $password;
    private $sharedSecret;

    private $cookieStorage = [];
    private $cookieFile = '';

    private $steamID = -1;
    private $accessToken = null;
    private $refreshToken = null;
    private $clientId = -1;

    const MAIN_HOST = "steamcommunity.com";

    const DOMAINS = [
        "https://steamcommunity.com",
        "https://store.steampowered.com",
        "https://help.steampowered.com",
        "https://steam.tv",
        "https://checkout.steampowered.com",
    ];


    public function __construct($login, $password, $sharedSecret = null, array $cookieOptions = [])
    {
        $this->login = $login;
        $this->password = $password;
        $this->sharedSecret = $sharedSecret;

        self::setCookieOptions($cookieOptions);
    }

    /**
     * @return int
     */
    public function getSteamID()
    {
        return $this->steamID;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret;
    }

    /**
     * @return null
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return null
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    private function setCookieOptions(array $options)
    {
        $this->cookieStorage = isset($options['cookie_storage']) ? $options['cookie_storage'] : $this->cookieStorage;
        $this->cookieFile = isset($options['cookie_file']) ? $options['cookie_file'] : $this->cookieFile;
    }

    /**
     * @param string|null $code
     * @return bool
     * @throws SteamErrorException
     * @throws SteamResponseException
     */
    public function login(string $code = null): bool
    {
        if (self::isAuthorized())
            return true;
        else if (!array_key_exists('sessionid', self::getCookiesByHost()))
            self::getStartupCookies();

        $keys = self::getRSAKey();
        $encryptedPassword = self::encryptPassword($keys);

        $authSession = self::beginAuthSession($encryptedPassword, $keys->getTimestamp(), EAuthTokenPlatformType::k_EAuthTokenPlatformType_WebBrowser);

        if ($authSession->getAllowedConfirmations()) {
            if (self::isTwoFactorRequired($authSession->getAllowedConfirmations()[0])) {
                $twoFactorCode = $code ?? SteamTotp::getAuthCode($this->sharedSecret);

                self::updateAuthSession($authSession->getClientId(), $authSession->getSteamid(), $twoFactorCode,
                                        EAuthSessionGuardType::k_EAuthSessionGuardType_DeviceCode);
            }
        }

        $session = self::pollAuthSessionStatus($authSession->getClientId(), $authSession->getRequestId());

        $tokens = self::finalizeLogin($session->getRefreshToken(), self::getCookiesByHost()['sessionid']);

        foreach ($tokens['transfer_info'] as $token) {
            self::setToken($token['url'], $token['params']['nonce'], $token['params']['auth'], $authSession->getSteamid());
        }

        foreach (self::DOMAINS as $domain) {
            self::getAdditionalCookies($domain);
        }

        $this->steamID = $authSession->getSteamid();
        $this->login = $session->getAccountName();
        $this->accessToken = $session->getAccessToken();
        $this->refreshToken = $session->getRefreshToken();

        if ($session->getNewClientId())
            $this->clientId = $session->getNewClientId();
        else
            $this->clientId = $authSession->getClientId();

        return true;
    }

    /**
     * @param string|null $code
     * @return bool|void
     * @throws SteamErrorException
     * @throws SteamResponseException
     */
    public function loginMobile(string $code = null)
    {
        if (self::isAuthorized())
            return true;
        else if (!array_key_exists('sessionid', self::getCookiesByHost()))
            self::getStartupCookies();

        $keys = self::getRSAKey();
        $encryptedPassword = self::encryptPassword($keys);

        $authSession = self::beginAuthSession($encryptedPassword, $keys->getTimestamp(), EAuthTokenPlatformType::k_EAuthTokenPlatformType_MobileApp);

        if ($authSession->getAllowedConfirmations()) {
            if (self::isTwoFactorRequired($authSession->getAllowedConfirmations()[0])) {
                $twoFactorCode = $code ?? SteamTotp::getAuthCode($this->sharedSecret);

                self::updateAuthSession($authSession->getClientId(), $authSession->getSteamid(), $twoFactorCode,
                    EAuthSessionGuardType::k_EAuthSessionGuardType_DeviceCode);
            }
        }

        $session = self::pollAuthSessionStatus($authSession->getClientId(), $authSession->getRequestId());

        $tokens = self::finalizeLogin($session->getRefreshToken(), self::getCookiesByHost()['sessionid']);

        foreach ($tokens['transfer_info'] as $token) {
            if (str_contains($token['url'], self::MAIN_HOST))
                self::setToken($token['url'], $token['params']['nonce'], $token['params']['auth'], $authSession->getSteamid());
        }

        self::getAdditionalCookies('https://steamcommunity.com');

        $this->steamID = $authSession->getSteamid();
        $this->login = $session->getAccountName();
        $this->accessToken = $session->getAccessToken();
        $this->refreshToken = $session->getRefreshToken();

        if ($session->getNewClientId())
            $this->clientId = $session->getNewClientId();
        else
            $this->clientId = $authSession->getClientId();

        return true;
    }


    /**
     * @param $keys
     * @return string
     */
    private function encryptPassword($keys): string
    {
        $rsa = new Crypt_RSA();

        $key = [
            'modulus' => new MathBigInteger($keys->getPublickeyMod(), 16),
            'publicExponent' => new MathBigInteger($keys->getPublickeyExp(), 16)
        ];

        $rsa->loadKey($key, CRYPT_RSA_PUBLIC_FORMAT_RAW);
        $rsa->setPublicKey($key);
        $rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);

        return base64_encode($rsa->encrypt($this->password));
    }

    /**
     * @param $confirmation
     * @return bool
     */
    private function isTwoFactorRequired($confirmation): bool
    {
        return $confirmation->getConfirmationType() == EAuthSessionGuardType::k_EAuthSessionGuardType_DeviceCode;
    }

    /**
     * @throws SteamResponseException
     */
    public function getStartupCookies()
    {
        $curl = new Curl();
        $curl->setDefaultJsonDecoder($assoc = true);
        $curl->setConnectTimeout(30);
        $curl->setTimeout(60);

        $curl->setCookieJar($this->cookieFile);

        $curl->get('https://steamcommunity.com/');

        if ($curl->error)
            throw new SteamResponseException($curl->errorMessage);

        self::updateCookieStorage($curl->responseCookies);
    }

    /**
     * @return null
     * @throws SteamResponseException
     */
    public function isAuthorized()
    {
        $curl = new Curl();
        $curl->setDefaultJsonDecoder($assoc = true);
        $curl->setConnectTimeout(30);
        $curl->setTimeout(60);

        $curl->setCookies(self::getCookiesByHost());
        $curl->setCookieFile($this->cookieFile);

        $curl->get('https://steamcommunity.com/chat/clientjstoken');

        if ($curl->error)
            throw new SteamResponseException($curl->errorMessage);

        return $curl->response['logged_in'];
    }

    /**
     * @param $url
     * @throws SteamResponseException
     */
    private function getAdditionalCookies($url)
    {
        $curl = new Curl();
        $curl->setDefaultJsonDecoder($assoc = true);
        $curl->setConnectTimeout(30);
        $curl->setTimeout(60);

        $curl->setCookies(self::getCookiesByHost(self::getHostFromUrl($url)));
        $curl->setCookieFile($this->cookieFile);
        $curl->setCookieJar($this->cookieFile);

        $curl->get($url);

        if ($curl->error)
            throw new SteamResponseException($curl->errorMessage);

        self::updateCookieStorage($curl->responseCookies, self::getHostFromUrl($url));
    }


    /**
     * @param string $url
     * @return array|int|string
     */
    public function getHostFromUrl(string $url)
    {
        $parsedUrl = parse_url($url, PHP_URL_HOST);

        if ($parsedUrl) return $parsedUrl;
        else return "";
    }

    /**
     * @param $timezone
     * @return false|int
     * @throws Exception
     */
    public function getTimezoneOffset($timezone)
    {
        $thisTz = new DateTimeZone($timezone);
        $now = new DateTime("now", $thisTz);

        return $thisTz->getOffset($now);
    }

    /**
     * @param $errorCode
     * @throws SteamErrorException
     */
    private function checkSteamError($errorCode)
    {
        if ($errorCode) {
            if ($errorCode == 1)
                return;
            else if (array_key_exists($errorCode, SteamConfig::CODES))
                throw new SteamErrorException(SteamConfig::CODES[$errorCode]);
        }
    }
}
