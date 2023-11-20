<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ECloudGamingPlatform enum
 */
final class ECloudGamingPlatform
{
    const k_ECloudGamingPlatformNone = 0;
    const k_ECloudGamingPlatformValve = 1;
    const k_ECloudGamingPlatformNVIDIA = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ECloudGamingPlatformNone' => self::k_ECloudGamingPlatformNone,
            'k_ECloudGamingPlatformValve' => self::k_ECloudGamingPlatformValve,
            'k_ECloudGamingPlatformNVIDIA' => self::k_ECloudGamingPlatformNVIDIA,
        );
    }
}
}