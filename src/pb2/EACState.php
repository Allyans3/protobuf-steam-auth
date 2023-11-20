<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EACState enum
 */
final class EACState
{
    const k_EACState_Unknown = 0;
    const k_EACState_Disconnected = 1;
    const k_EACState_Connected = 2;
    const k_EACState_ConnectedSlow = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EACState_Unknown' => self::k_EACState_Unknown,
            'k_EACState_Disconnected' => self::k_EACState_Disconnected,
            'k_EACState_Connected' => self::k_EACState_Connected,
            'k_EACState_ConnectedSlow' => self::k_EACState_ConnectedSlow,
        );
    }
}
}