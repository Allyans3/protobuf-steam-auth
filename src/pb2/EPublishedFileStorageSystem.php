<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EPublishedFileStorageSystem enum
 */
final class EPublishedFileStorageSystem
{
    const k_EPublishedFileStorageSystemInvalid = 0;
    const k_EPublishedFileStorageSystemLegacyCloud = 1;
    const k_EPublishedFileStorageSystemDepot = 2;
    const k_EPublishedFileStorageSystemUGCCloud = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EPublishedFileStorageSystemInvalid' => self::k_EPublishedFileStorageSystemInvalid,
            'k_EPublishedFileStorageSystemLegacyCloud' => self::k_EPublishedFileStorageSystemLegacyCloud,
            'k_EPublishedFileStorageSystemDepot' => self::k_EPublishedFileStorageSystemDepot,
            'k_EPublishedFileStorageSystemUGCCloud' => self::k_EPublishedFileStorageSystemUGCCloud,
        );
    }
}
}