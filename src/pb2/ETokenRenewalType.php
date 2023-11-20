<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ETokenRenewalType enum
 */
final class ETokenRenewalType
{
    const k_ETokenRenewalType_None = 0;
    const k_ETokenRenewalType_Allow = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ETokenRenewalType_None' => self::k_ETokenRenewalType_None,
            'k_ETokenRenewalType_Allow' => self::k_ETokenRenewalType_Allow,
        );
    }
}
}