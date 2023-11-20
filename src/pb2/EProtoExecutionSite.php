<?php
/**
 * Auto generated from steammessages_unified_base.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EProtoExecutionSite enum
 */
final class EProtoExecutionSite
{
    const k_EProtoExecutionSiteUnknown = 0;
    const k_EProtoExecutionSiteSteamClient = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EProtoExecutionSiteUnknown' => self::k_EProtoExecutionSiteUnknown,
            'k_EProtoExecutionSiteSteamClient' => self::k_EProtoExecutionSiteSteamClient,
        );
    }
}
}