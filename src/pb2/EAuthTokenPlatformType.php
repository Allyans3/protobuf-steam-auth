<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * EAuthTokenPlatformType enum
 */
final class EAuthTokenPlatformType
{
    const k_EAuthTokenPlatformType_Unknown = 0;
    const k_EAuthTokenPlatformType_SteamClient = 1;
    const k_EAuthTokenPlatformType_WebBrowser = 2;
    const k_EAuthTokenPlatformType_MobileApp = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EAuthTokenPlatformType_Unknown' => self::k_EAuthTokenPlatformType_Unknown,
            'k_EAuthTokenPlatformType_SteamClient' => self::k_EAuthTokenPlatformType_SteamClient,
            'k_EAuthTokenPlatformType_WebBrowser' => self::k_EAuthTokenPlatformType_WebBrowser,
            'k_EAuthTokenPlatformType_MobileApp' => self::k_EAuthTokenPlatformType_MobileApp,
        );
    }
}
}