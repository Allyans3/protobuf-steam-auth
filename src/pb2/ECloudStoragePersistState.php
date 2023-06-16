<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ECloudStoragePersistState enum
 */
final class ECloudStoragePersistState
{
    const k_ECloudStoragePersistStatePersisted = 0;
    const k_ECloudStoragePersistStateForgotten = 1;
    const k_ECloudStoragePersistStateDeleted = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ECloudStoragePersistStatePersisted' => self::k_ECloudStoragePersistStatePersisted,
            'k_ECloudStoragePersistStateForgotten' => self::k_ECloudStoragePersistStateForgotten,
            'k_ECloudStoragePersistStateDeleted' => self::k_ECloudStoragePersistStateDeleted,
        );
    }
}
}