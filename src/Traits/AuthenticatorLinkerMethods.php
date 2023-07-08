<?php

namespace SteamAuth\Traits;

use Curl\Curl;
use SteamAuth\Exceptions\SteamErrorException;
use SteamAuth\Exceptions\SteamResponseException;
use SteamAuth\pb2\CTwoFactor\CTwoFactor_AddAuthenticator_Request;
use SteamAuth\pb2\CTwoFactor\CTwoFactor_AddAuthenticator_Response;

trait AuthenticatorLinkerMethods
{
    /**
     * @param $steamId
     * @param $deviceID
     * @param $steamTime
     * @return CTwoFactor_AddAuthenticator_Response
     * @throws SteamResponseException
     * @throws SteamErrorException
     */
    public function addAuthenticator($steamId, $deviceID, $steamTime): CTwoFactor_AddAuthenticator_Response
    {
        $curl = new Curl();

        $message = new CTwoFactor_AddAuthenticator_Request();

        $message->setSteamid($steamId);
        $message->setAuthenticatorType(1);
        $message->setAuthenticatorTime($steamTime);
        $message->setSmsPhoneId('1');
        $message->setDeviceIdentifier($deviceID);
        $message->setVersion(2);

        $curl->post('https://api.steampowered.com/ITwoFactorService/AddAuthenticator/v1',
            [
                'input_protobuf_encoded' => base64_encode($message->serializeToString())
            ]
        );

        $addAuthenticatorResponse = new CTwoFactor_AddAuthenticator_Response();

        if (!$curl->error)
            $addAuthenticatorResponse->parseFromString($curl->response);
        else
            throw new SteamResponseException($curl->errorMessage);

        self::checkSteamError($curl->responseHeaders['x-eresult']);

        return $addAuthenticatorResponse;
    }
}