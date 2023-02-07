<?php

namespace SteamAuth;

use Curl\Curl;
use DateTime;
use DateTimeZone;
use Exception;
use SteamAuth\Configs\SteamConfig;
use SteamAuth\Exceptions\SteamErrorException;
use SteamAuth\pb2\CAuthentication_BeginAuthSessionViaCredentials_Request;
use SteamAuth\pb2\CAuthentication_BeginAuthSessionViaCredentials_Response;
use SteamAuth\pb2\CAuthentication_GetPasswordRSAPublicKey_Request;
use SteamAuth\pb2\CAuthentication_GetPasswordRSAPublicKey_Response;
use SteamAuth\pb2\CAuthentication_PollAuthSessionStatus_Request;
use SteamAuth\pb2\CAuthentication_PollAuthSessionStatus_Response;
use SteamAuth\pb2\CAuthentication_UpdateAuthSessionWithSteamGuardCode_Request;
use SteamAuth\pb2\EAuthSessionGuardType;
use SteamAuth\pb2\EAuthTokenPlatformType;
use SteamAuth\pb2\ESessionPersistence;
use SteamAuth\RSA\Crypt\Crypt_RSA;
use SteamAuth\RSA\Math\MathBigInteger;
use SteamAuth\Exceptions\SteamResponseException;
use SteamTotp\SteamTotp;

class SteamAuth
{
    private $login;
    private $password;
    private $sharedSecret;

    private $cookieStorage = [];
    private $cookieFile = '';

    private $steamID = -1;
    private $accessToken = null;
    private $refreshToken = null;
    private $clientId = -1;

    const HEADERS = [
        'Origin' => "https://steamcommunity.com",
        'Referer' => "https://steamcommunity.com/"
    ];

    const MAIN_HOST = "steamcommunity.com";

    const DOMAINS = [
        "https://steamcommunity.com",
        "https://store.steampowered.com",
        "https://help.steampowered.com",
        "https://steam.tv"
    ];


    public function __construct($login, $password, $sharedSecret = null, array $cookieOptions = [])
    {
        $this->login = $login;
        $this->password = $password;
        $this->sharedSecret = $sharedSecret;

        self::setCookieOptions($cookieOptions);
    }

    private function setCookieOptions(array $options)
    {
        $this->cookieStorage = isset($options['cookie_storage']) ? $options['cookie_storage'] : $this->cookieStorage;
        $this->cookieFile = isset($options['cookie_file']) ? $options['cookie_file'] : $this->cookieFile;
    }

    /**
     * @return bool
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    public function login(string $code = null): bool
    {
        if (self::isAuthorized())
            return true;
        else if (!array_key_exists('sessionid', self::getCookiesByHost()))
            self::getStartupCookies();

        $keys = self::getRSAKey();
        $encryptedPassword = self::encryptPassword($keys);

        $authSession = self::beginAuthSession($encryptedPassword, $keys->getTimestamp());

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
        $this->clientId = $session->getNewClientId();

        return true;
    }

    /**
     * @return CAuthentication_GetPasswordRSAPublicKey_Response
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    private function getRSAKey(): CAuthentication_GetPasswordRSAPublicKey_Response
    {
        $curl = new Curl();;
//        $curl->setHeaders(self::HEADERS);

        $message = new CAuthentication_GetPasswordRSAPublicKey_Request();
        $message->setAccountName($this->login);

        $curl->get('https://api.steampowered.com/IAuthenticationService/GetPasswordRSAPublicKey/v1',
            [
                'origin' => 'https://steamcommunity.com',
                'input_protobuf_encoded' => base64_encode($message->serializeToString())
            ]
        );

        $rsaResponse = new CAuthentication_GetPasswordRSAPublicKey_Response();

        if (!$curl->error)
            $rsaResponse->parseFromString($curl->response);
        else
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);

        return $rsaResponse;
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
     * @param $encryptedPassword
     * @param $rsaTimestamp
     * @return CAuthentication_BeginAuthSessionViaCredentials_Response
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    private function beginAuthSession($encryptedPassword, $rsaTimestamp): CAuthentication_BeginAuthSessionViaCredentials_Response
    {
        $curl = new Curl();
//        $curl->setHeaders(self::HEADERS);

        $message = new CAuthentication_BeginAuthSessionViaCredentials_Request();

        $message->setAccountName($this->login);
        $message->setEncryptedPassword($encryptedPassword);
        $message->setEncryptionTimestamp($rsaTimestamp);
        $message->setRememberLogin(true);
        $message->setPlatformType(EAuthTokenPlatformType::k_EAuthTokenPlatformType_WebBrowser);
        $message->setWebsiteId('Community');
        $message->setPersistence(ESessionPersistence::k_ESessionPersistence_Persistent);
        $message->setDeviceFriendlyName('Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2812-12-10 04:56:28 Firefox/3.8');

        $curl->post('https://api.steampowered.com/IAuthenticationService/BeginAuthSessionViaCredentials/v1',
            [
                'input_protobuf_encoded' => base64_encode($message->serializeToString())
            ]
        );

        $sessionResponse = new CAuthentication_BeginAuthSessionViaCredentials_Response();

        if (!$curl->error)
            $sessionResponse->parseFromString($curl->response);
        else
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);

        return $sessionResponse;
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
     * @param $clientId
     * @param $steamId
     * @param $twoFactoryCode
     * @param $codeType
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    private function updateAuthSession($clientId, $steamId, $twoFactoryCode, $codeType)
    {
        $curl = new Curl();
//        $curl->setHeaders(self::HEADERS);

        $message = new CAuthentication_UpdateAuthSessionWithSteamGuardCode_Request();

        $message->setClientId($clientId);
        $message->setSteamid($steamId);
        $message->setCode($twoFactoryCode);
        $message->setCodeType($codeType);

        $curl->post('https://api.steampowered.com/IAuthenticationService/UpdateAuthSessionWithSteamGuardCode/v1',
            [
                'input_protobuf_encoded' => base64_encode($message->serializeToString())
            ]
        );

        if ($curl->error)
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);
    }

    /**
     * @param $clientId
     * @param $requestId
     * @return CAuthentication_PollAuthSessionStatus_Response
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    private function pollAuthSessionStatus($clientId, $requestId): CAuthentication_PollAuthSessionStatus_Response
    {
        $curl = new Curl();

        $message = new CAuthentication_PollAuthSessionStatus_Request();

        $message->setClientId($clientId);
        $message->setRequestId($requestId);

        $curl->post('https://api.steampowered.com/IAuthenticationService/PollAuthSessionStatus/v1',
            [
                'input_protobuf_encoded' => base64_encode($message->serializeToString())
            ]
        );

        $pollAuthResponse = new CAuthentication_PollAuthSessionStatus_Response();

        if (!$curl->error)
            $pollAuthResponse->parseFromString($curl->response);
        else
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);

        return $pollAuthResponse;
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
     * @param $refreshToken
     * @param $sessionId
     * @return array
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    private function finalizeLogin($refreshToken, $sessionId): array
    {
        $curl = new Curl();
        $curl->setDefaultJsonDecoder($assoc = true);
        $curl->setConnectTimeout(30);
        $curl->setTimeout(60);

        $curl->post('https://login.steampowered.com/jwt/finalizelogin',
            [
                'nonce' => $refreshToken,
                'sessionid' => $sessionId,
                'redir' => 'https://steamcommunity.com/login/home/?goto='
            ]
        );

        if ($curl->error)
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);

        return $curl->response;
    }

    /**
     * @param string $url
     * @param string $nonce
     * @param $auth
     * @param $steamId
     * @throws SteamResponseException
     */
    private function setToken(string $url, string $nonce, $auth, $steamId)
    {
        $curl = new Curl();
        $curl->setDefaultJsonDecoder($assoc = true);
        $curl->setConnectTimeout(30);
        $curl->setTimeout(60);

        $curl->setCookies(self::getCookiesByHost(self::getHostFromUrl($url)));
        $curl->setCookieFile($this->cookieFile);
        $curl->setCookieJar($this->cookieFile);

        $curl->post($url,
            [
                'nonce' => $nonce,
                'auth' => $auth,
                'steamID' => $steamId
            ]
        );

        if ($curl->error)
            throw new SteamResponseException($curl->errorMessage);

        self::updateCookieStorage($curl->responseCookies, self::getHostFromUrl($url));
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

    public function getSteamID()
    {
        return $this->steamID;
    }

    public function getAccountName()
    {
        return $this->login;
    }

    /**
     * @return mixed|null
     */
    public function getSharedSecret(): mixed
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
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @return array|mixed
     */
    public function getCookies()
    {
        return $this->cookieStorage;
    }

    /**
     * @param string $host
     * @return array|mixed
     */
    public function getCookiesByHost(string $host = self::MAIN_HOST)
    {
        if (array_key_exists($host, $this->cookieStorage))
            return $this->cookieStorage[$host];

        return [];
    }

    /**
     * @param $cookies
     * @param string $host
     */
    public function updateCookieStorage($cookies, string $host = self::MAIN_HOST)
    {
        foreach ($cookies as $key => $value) {
            $this->cookieStorage[$host][$key] = $value;
        }
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
