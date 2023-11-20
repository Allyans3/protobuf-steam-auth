<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EGraphicsPerfOverlayLevel enum
 */
final class EGraphicsPerfOverlayLevel
{
    const k_EGraphicsPerfOverlayLevel_Hidden = 0;
    const k_EGraphicsPerfOverlayLevel_Basic = 1;
    const k_EGraphicsPerfOverlayLevel_Medium = 2;
    const k_EGraphicsPerfOverlayLevel_Full = 3;
    const k_EGraphicsPerfOverlayLevel_Minimal = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EGraphicsPerfOverlayLevel_Hidden' => self::k_EGraphicsPerfOverlayLevel_Hidden,
            'k_EGraphicsPerfOverlayLevel_Basic' => self::k_EGraphicsPerfOverlayLevel_Basic,
            'k_EGraphicsPerfOverlayLevel_Medium' => self::k_EGraphicsPerfOverlayLevel_Medium,
            'k_EGraphicsPerfOverlayLevel_Full' => self::k_EGraphicsPerfOverlayLevel_Full,
            'k_EGraphicsPerfOverlayLevel_Minimal' => self::k_EGraphicsPerfOverlayLevel_Minimal,
        );
    }
}
}