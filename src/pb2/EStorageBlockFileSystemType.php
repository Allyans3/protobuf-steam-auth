<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EStorageBlockFileSystemType enum
 */
final class EStorageBlockFileSystemType
{
    const k_EStorageBlockFileSystemType_Invalid = 0;
    const k_EStorageBlockFileSystemType_Unknown = 1;
    const k_EStorageBlockFileSystemType_VFat = 2;
    const k_EStorageBlockFileSystemType_Ext4 = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EStorageBlockFileSystemType_Invalid' => self::k_EStorageBlockFileSystemType_Invalid,
            'k_EStorageBlockFileSystemType_Unknown' => self::k_EStorageBlockFileSystemType_Unknown,
            'k_EStorageBlockFileSystemType_VFat' => self::k_EStorageBlockFileSystemType_VFat,
            'k_EStorageBlockFileSystemType_Ext4' => self::k_EStorageBlockFileSystemType_Ext4,
        );
    }
}
}