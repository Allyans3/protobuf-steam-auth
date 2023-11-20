<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EGPUPerformanceLevel enum
 */
final class EGPUPerformanceLevel
{
    const k_EGPUPerformanceLevel_Invalid = 0;
    const k_EGPUPerformanceLevel_Auto = 1;
    const k_EGPUPerformanceLevel_Manual = 2;
    const k_EGPUPerformanceLevel_Low = 3;
    const k_EGPUPerformanceLevel_High = 4;
    const k_EGPUPerformanceLevel_Profiling = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EGPUPerformanceLevel_Invalid' => self::k_EGPUPerformanceLevel_Invalid,
            'k_EGPUPerformanceLevel_Auto' => self::k_EGPUPerformanceLevel_Auto,
            'k_EGPUPerformanceLevel_Manual' => self::k_EGPUPerformanceLevel_Manual,
            'k_EGPUPerformanceLevel_Low' => self::k_EGPUPerformanceLevel_Low,
            'k_EGPUPerformanceLevel_High' => self::k_EGPUPerformanceLevel_High,
            'k_EGPUPerformanceLevel_Profiling' => self::k_EGPUPerformanceLevel_Profiling,
        );
    }
}
}