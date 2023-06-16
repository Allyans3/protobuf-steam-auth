<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESystemFanControlMode enum
 */
final class ESystemFanControlMode
{
    const k_SystemFanControlMode_Invalid = 0;
    const k_SystemFanControlMode_Disabled = 1;
    const k_SystemFanControlMode_Default = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_SystemFanControlMode_Invalid' => self::k_SystemFanControlMode_Invalid,
            'k_SystemFanControlMode_Disabled' => self::k_SystemFanControlMode_Disabled,
            'k_SystemFanControlMode_Default' => self::k_SystemFanControlMode_Default,
        );
    }
}
}