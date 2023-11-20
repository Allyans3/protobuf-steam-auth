<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EAuthSessionSecurityHistory enum
 */
final class EAuthSessionSecurityHistory
{
    const k_EAuthSessionSecurityHistory_Invalid = 0;
    const k_EAuthSessionSecurityHistory_UsedPreviously = 1;
    const k_EAuthSessionSecurityHistory_NoPriorHistory = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EAuthSessionSecurityHistory_Invalid' => self::k_EAuthSessionSecurityHistory_Invalid,
            'k_EAuthSessionSecurityHistory_UsedPreviously' => self::k_EAuthSessionSecurityHistory_UsedPreviously,
            'k_EAuthSessionSecurityHistory_NoPriorHistory' => self::k_EAuthSessionSecurityHistory_NoPriorHistory,
        );
    }
}
}