<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EStorageDriveMediaType enum
 */
final class EStorageDriveMediaType
{
    const k_EStorageDriveMediaType_Invalid = 0;
    const k_EStorageDriveMediaType_Unknown = 1;
    const k_EStorageDriveMediaType_HDD = 2;
    const k_EStorageDriveMediaType_SSD = 3;
    const k_EStorageDriveMediaType_Removable = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EStorageDriveMediaType_Invalid' => self::k_EStorageDriveMediaType_Invalid,
            'k_EStorageDriveMediaType_Unknown' => self::k_EStorageDriveMediaType_Unknown,
            'k_EStorageDriveMediaType_HDD' => self::k_EStorageDriveMediaType_HDD,
            'k_EStorageDriveMediaType_SSD' => self::k_EStorageDriveMediaType_SSD,
            'k_EStorageDriveMediaType_Removable' => self::k_EStorageDriveMediaType_Removable,
        );
    }
}
}