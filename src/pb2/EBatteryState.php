<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EBatteryState enum
 */
final class EBatteryState
{
    const k_EBatteryState_Unknown = 0;
    const k_EBatteryState_Discharging = 1;
    const k_EBatteryState_Charging = 2;
    const k_EBatteryState_Full = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EBatteryState_Unknown' => self::k_EBatteryState_Unknown,
            'k_EBatteryState_Discharging' => self::k_EBatteryState_Discharging,
            'k_EBatteryState_Charging' => self::k_EBatteryState_Charging,
            'k_EBatteryState_Full' => self::k_EBatteryState_Full,
        );
    }
}
}