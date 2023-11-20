<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ECPUGovernor enum
 */
final class ECPUGovernor
{
    const k_ECPUGovernor_Invalid = 0;
    const k_ECPUGovernor_Perf = 1;
    const k_ECPUGovernor_Powersave = 2;
    const k_ECPUGovernor_Manual = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ECPUGovernor_Invalid' => self::k_ECPUGovernor_Invalid,
            'k_ECPUGovernor_Perf' => self::k_ECPUGovernor_Perf,
            'k_ECPUGovernor_Powersave' => self::k_ECPUGovernor_Powersave,
            'k_ECPUGovernor_Manual' => self::k_ECPUGovernor_Manual,
        );
    }
}
}