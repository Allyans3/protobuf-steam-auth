<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EAuthTokenRevokeAction enum
 */
final class EAuthTokenRevokeAction
{
    const k_EAuthTokenRevokeLogout = 0;
    const k_EAuthTokenRevokePermanent = 1;
    const k_EAuthTokenRevokeReplaced = 2;
    const k_EAuthTokenRevokeSupport = 3;
    const k_EAuthTokenRevokeConsume = 4;
    const k_EAuthTokenRevokeNonRememberedLogout = 5;
    const k_EAuthTokenRevokeNonRememberedPermanent = 6;
    const k_EAuthTokenRevokeAutomatic = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EAuthTokenRevokeLogout' => self::k_EAuthTokenRevokeLogout,
            'k_EAuthTokenRevokePermanent' => self::k_EAuthTokenRevokePermanent,
            'k_EAuthTokenRevokeReplaced' => self::k_EAuthTokenRevokeReplaced,
            'k_EAuthTokenRevokeSupport' => self::k_EAuthTokenRevokeSupport,
            'k_EAuthTokenRevokeConsume' => self::k_EAuthTokenRevokeConsume,
            'k_EAuthTokenRevokeNonRememberedLogout' => self::k_EAuthTokenRevokeNonRememberedLogout,
            'k_EAuthTokenRevokeNonRememberedPermanent' => self::k_EAuthTokenRevokeNonRememberedPermanent,
            'k_EAuthTokenRevokeAutomatic' => self::k_EAuthTokenRevokeAutomatic,
        );
    }
}
}