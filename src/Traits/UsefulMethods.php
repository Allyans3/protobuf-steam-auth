<?php

namespace SteamAuth\Traits;

use Ramsey\Uuid\Uuid;
use SteamAuth\Exceptions\SteamErrorException;
use SteamAuth\pb2\EAuthTokenPlatformType;
use SteamTotp\SteamTotp;

trait UsefulMethods
{
    /**
     * @param $platformType
     * @return array
     * @throws SteamErrorException
     */
    public function getDataForPlatformType($platformType): array
    {
        $steamClientUserAgent = 'Mozilla/5.0 (Windows; U; Windows NT 10.0; en-US; Valve Steam Client/default/1665786434; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36';
        $chromeUserAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36';
        $mobileUserAgent = 'Mozilla/5.0 (Linux; Android 12; SM-S906N Build/QP1A.190711.020; wv; Valve Steam App) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/80.0.3987.119 Mobile Safari/537.36';

        switch ($platformType) {
            case EAuthTokenPlatformType::k_EAuthTokenPlatformType_SteamClient:
                $refererQuery = [
                    'IN_CLIENT' => 'true',
                    'WEBSITE_ID'=> 'Client',
                    'LOCAL_HOSTNAME'=> self::getSpoofedHostname(),
                    'WEBAPI_BASE_URL'=> 'https://api.steampowered.com/',
                    'STORE_BASE_URL'=> 'https://store.steampowered.com/',
                    'USE_POPUPS'=> 'true',
                    'DEV_MODE'=> 'false',
                    'LANGUAGE'=> 'english',
                    'PLATFORM'=> 'windows',
                    'COUNTRY'=> 'US',
                    'LAUNCHER_TYPE'=> '0',
                    'IN_LOGIN'=> 'true'
                ];

                return [
                    'website_id' => 'Client',
                    'headers' => [
                        'user_agent' => $steamClientUserAgent,
                        'origin' => 'https://steamloopback.host',
                        'referer' => 'https://steamloopback.host/index.html?' . http_build_query($refererQuery)
                    ],
                    'device_details' => [
                        'device_friendly_name' => $refererQuery['LOCAL_HOSTNAME'],
                        'platform_type' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_SteamClient,
                        'os_type' => 16, // Windows 10
                        // EGamingDeviceType full definition is unknown, but 1 appears to be a desktop PC
                        'gaming_device_type' => 1
                    ]
                ];
            case EAuthTokenPlatformType::k_EAuthTokenPlatformType_WebBrowser:
                return [
                    'website_id' => 'Community',
                    'headers' => [
                        'user_agent' => $chromeUserAgent,
                        'origin' => 'https://steamcommunity.com',
                        'referer' => 'https://steamcommunity.com',
                    ],
                    'device_details' => [
                        'device_friendly_name' => $chromeUserAgent,
                        'platform_type' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_WebBrowser,
                        'os_type' => -1
                    ]
                ];
            case EAuthTokenPlatformType::k_EAuthTokenPlatformType_MobileApp:
                return [
                    'website_id' => 'Mobile',
                    'headers' => [
                        'user_agent' => $mobileUserAgent,
                        'cookie' => [
                            'steamLoginSecure' => '',
                            'sessionid' => '',
                            'mobileClient' => 'android',
                            'mobileClientVersion' => '3.9.7',
                            'Steam_Language' => 'english'
                        ]
                    ],
                    'device_details' => [
                        'device_friendly_name' => 'Galaxy S22',
                        'platform_type' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_MobileApp,
                        'os_type' => -500,
                        'gaming_device_type' => 528 // dunno
                    ]
                ];
            default:
                throw new SteamErrorException("Unsupported platform type");
        }
    }

    /**
     * @return string
     */
    public function getSpoofedHostname(): string
    {
        $sha1 = array_map(function($x){ return ord($x); }, str_split(sha1(gethostname())));

        define("SteamAuth\Traits\CHARS", 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        $output = 'DESKTOP-';

        for ($i = 0; $i < 7; $i++) {
            $output .= CHARS[$sha1[$i] % strlen(CHARS)];
        }

        return $output;
    }

    /**
     * @param $token
     * @return array|mixed
     */
    public function decodeJWT($token)
    {
        if (!preg_match('/^([a-zA-Z0-9_=]+)\.([a-zA-Z0-9_=]+)\.([a-zA-Z0-9_\-\+\/=]*)/', $token))
            return false;

        return json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))), true);
    }





    // Get parameters for Mobile Methods

    /**
     * @param string $version
     * @return string
     */
    public function getDeviceIdByUuid(string $version = 'v4'): string
    {
        switch ($version) {
            case 'v1':
                $uuid = Uuid::uuid1()->toString();
                break;
            case 'v6':
                $uuid = Uuid::uuid6()->toString();
                break;
            default:
                $uuid = Uuid::uuid4()->toString();
        }

        return "android:$uuid";
    }

    /**
     * @param string|int $steamid Your SteamID in 64-bit format (as a string or integer)
     * @return string
     */
    public function getDeviceIdBySteamId($steamId): string
    {
        return SteamTotp::getDeviceID($steamId);
    }
}