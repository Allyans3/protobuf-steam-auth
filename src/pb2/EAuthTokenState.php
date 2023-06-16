<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EAuthTokenState enum
 */
final class EAuthTokenState
{
    const k_EAuthTokenState_Invalid = 0;
    const k_EAuthTokenState_New = 1;
    const k_EAuthTokenState_Confirmed = 2;
    const k_EAuthTokenState_Issued = 3;
    const k_EAuthTokenState_Denied = 4;
    const k_EAuthTokenState_LoggedOut = 5;
    const k_EAuthTokenState_Consumed = 6;
    const k_EAuthTokenState_Revoked = 99;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EAuthTokenState_Invalid' => self::k_EAuthTokenState_Invalid,
            'k_EAuthTokenState_New' => self::k_EAuthTokenState_New,
            'k_EAuthTokenState_Confirmed' => self::k_EAuthTokenState_Confirmed,
            'k_EAuthTokenState_Issued' => self::k_EAuthTokenState_Issued,
            'k_EAuthTokenState_Denied' => self::k_EAuthTokenState_Denied,
            'k_EAuthTokenState_LoggedOut' => self::k_EAuthTokenState_LoggedOut,
            'k_EAuthTokenState_Consumed' => self::k_EAuthTokenState_Consumed,
            'k_EAuthTokenState_Revoked' => self::k_EAuthTokenState_Revoked,
        );
    }
}
}