<?php

namespace SteamAuth\Traits;

use Curl\Curl;
use SteamAuth\Exceptions\SteamErrorException;
use SteamAuth\Exceptions\SteamResponseException;
use SteamAuth\pb2\CAuthentication_AccessToken_GenerateForApp_Request;
use SteamAuth\pb2\CAuthentication_AccessToken_GenerateForApp_Response;
use SteamAuth\pb2\CAuthentication_BeginAuthSessionViaCredentials_Request;
use SteamAuth\pb2\CAuthentication_BeginAuthSessionViaCredentials_Response;
use SteamAuth\pb2\CAuthentication_DeviceDetails;
use SteamAuth\pb2\CAuthentication_GetPasswordRSAPublicKey_Request;
use SteamAuth\pb2\CAuthentication_GetPasswordRSAPublicKey_Response;
use SteamAuth\pb2\CAuthentication_PollAuthSessionStatus_Request;
use SteamAuth\pb2\CAuthentication_PollAuthSessionStatus_Response;
use SteamAuth\pb2\CAuthentication_UpdateAuthSessionWithSteamGuardCode_Request;
use SteamAuth\pb2\ESessionPersistence;

trait SteamAuthMethods
{
    use UsefulMethods;

    /**
     * @return CAuthentication_GetPasswordRSAPublicKey_Response
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    public function getRSAKey(): CAuthentication_GetPasswordRSAPublicKey_Response
    {
        $curl = new Curl();;

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
     * @param $encryptedPassword
     * @param $rsaTimestamp
     * @param $platformType
     * @return CAuthentication_BeginAuthSessionViaCredentials_Response
     * @throws SteamErrorException
     * @throws SteamResponseException
     */
    public function beginAuthSession($encryptedPassword, $rsaTimestamp, $platformType): CAuthentication_BeginAuthSessionViaCredentials_Response
    {
        $curl = new Curl();

        $message = new CAuthentication_BeginAuthSessionViaCredentials_Request();

        $dataForPlatformType = self::getDataForPlatformType($platformType);

        $message->setDeviceFriendlyName($dataForPlatformType['device_details']['device_friendly_name']);
        $message->setAccountName($this->login);
        $message->setEncryptedPassword($encryptedPassword);
        $message->setEncryptionTimestamp($rsaTimestamp);
        $message->setRememberLogin(true);
        $message->setPlatformType($platformType);
        $message->setPersistence(ESessionPersistence::k_ESessionPersistence_Persistent);
        $message->setWebsiteId($dataForPlatformType['website_id']);

        $deviceDetails = new CAuthentication_DeviceDetails();
        $deviceDetails->setDeviceFriendlyName($dataForPlatformType['device_details']['device_friendly_name']);
        $deviceDetails->setPlatformType($dataForPlatformType['device_details']['platform_type']);
        $deviceDetails->setOsType($dataForPlatformType['device_details']['os_type']);

        if (array_key_exists('gaming_device_type', $dataForPlatformType['device_details']))
            $deviceDetails->setGamingDeviceType($dataForPlatformType['device_details']['gaming_device_type']);

        $message->setDeviceDetails($deviceDetails);

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
     * @param $clientId
     * @param $steamId
     * @param $twoFactoryCode
     * @param $codeType
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    public function updateAuthSession($clientId, $steamId, $twoFactoryCode, $codeType)
    {
        $curl = new Curl();

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
    public function pollAuthSessionStatus($clientId, $requestId): CAuthentication_PollAuthSessionStatus_Response
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
     * @param $refreshToken
     * @param $sessionId
     * @return array
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    public function finalizeLogin($refreshToken, $sessionId): array
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
     * @param $url
     * @param $nonce
     * @param $auth
     * @param $steamId
     * @throws SteamResponseException
     */
    public function setToken($url, $nonce, $auth, $steamId)
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
     * @param $refreshToken
     * @param $steamId
     * @return CAuthentication_AccessToken_GenerateForApp_Response
     * @throws SteamErrorException
     * @throws SteamResponseException
     */
    public function updateAccessToken($refreshToken, $steamId): CAuthentication_AccessToken_GenerateForApp_Response
    {
        $curl = new Curl();

        $message = new CAuthentication_AccessToken_GenerateForApp_Request();

        $message->setRefreshToken($refreshToken);
        $message->setSteamid($steamId);
        $message->setRenewalType($steamId);

        $curl->post('https://api.steampowered.com/IAuthenticationService/GenerateAccessTokenForApp/v1',
            [
                'input_protobuf_encoded' => base64_encode($message->serializeToString())
            ]
        );

        $accessTokenResponse = new CAuthentication_AccessToken_GenerateForApp_Response();

        if (!$curl->error)
            $accessTokenResponse->parseFromString($curl->response);
        else
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);

        return $accessTokenResponse;
    }
}