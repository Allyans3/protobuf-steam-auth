<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EPublishedFileInappropriateProvider enum
 */
final class EPublishedFileInappropriateProvider
{
    const k_EPublishedFileInappropriateProvider_Invalid = 0;
    const k_EPublishedFileInappropriateProvider_Google = 1;
    const k_EPublishedFileInappropriateProvider_Amazon = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EPublishedFileInappropriateProvider_Invalid' => self::k_EPublishedFileInappropriateProvider_Invalid,
            'k_EPublishedFileInappropriateProvider_Google' => self::k_EPublishedFileInappropriateProvider_Google,
            'k_EPublishedFileInappropriateProvider_Amazon' => self::k_EPublishedFileInappropriateProvider_Amazon,
        );
    }
}
}