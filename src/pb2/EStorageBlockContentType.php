<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EStorageBlockContentType enum
 */
final class EStorageBlockContentType
{
    const k_EStorageBlockContentType_Invalid = 0;
    const k_EStorageBlockContentType_Unknown = 1;
    const k_EStorageBlockContentType_FileSystem = 2;
    const k_EStorageBlockContentType_Crypto = 3;
    const k_EStorageBlockContentType_Raid = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EStorageBlockContentType_Invalid' => self::k_EStorageBlockContentType_Invalid,
            'k_EStorageBlockContentType_Unknown' => self::k_EStorageBlockContentType_Unknown,
            'k_EStorageBlockContentType_FileSystem' => self::k_EStorageBlockContentType_FileSystem,
            'k_EStorageBlockContentType_Crypto' => self::k_EStorageBlockContentType_Crypto,
            'k_EStorageBlockContentType_Raid' => self::k_EStorageBlockContentType_Raid,
        );
    }
}
}