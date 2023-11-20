<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EBroadcastPermission enum
 */
final class EBroadcastPermission
{
    const k_EBroadcastPermissionDisabled = 0;
    const k_EBroadcastPermissionFriendsApprove = 1;
    const k_EBroadcastPermissionFriendsAllowed = 2;
    const k_EBroadcastPermissionPublic = 3;
    const k_EBroadcastPermissionSubscribers = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EBroadcastPermissionDisabled' => self::k_EBroadcastPermissionDisabled,
            'k_EBroadcastPermissionFriendsApprove' => self::k_EBroadcastPermissionFriendsApprove,
            'k_EBroadcastPermissionFriendsAllowed' => self::k_EBroadcastPermissionFriendsAllowed,
            'k_EBroadcastPermissionPublic' => self::k_EBroadcastPermissionPublic,
            'k_EBroadcastPermissionSubscribers' => self::k_EBroadcastPermissionSubscribers,
        );
    }
}
}