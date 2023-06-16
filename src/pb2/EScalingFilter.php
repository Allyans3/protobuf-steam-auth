<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EScalingFilter enum
 */
final class EScalingFilter
{
    const k_EScalingFilter_Invalid = 0;
    const k_EScalingFilter_FSR = 1;
    const k_EScalingFilter_Nearest = 2;
    const k_EScalingFilter_Integer = 3;
    const k_EScalingFilter_Linear = 4;
    const k_EScalingFilter_NIS = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EScalingFilter_Invalid' => self::k_EScalingFilter_Invalid,
            'k_EScalingFilter_FSR' => self::k_EScalingFilter_FSR,
            'k_EScalingFilter_Nearest' => self::k_EScalingFilter_Nearest,
            'k_EScalingFilter_Integer' => self::k_EScalingFilter_Integer,
            'k_EScalingFilter_Linear' => self::k_EScalingFilter_Linear,
            'k_EScalingFilter_NIS' => self::k_EScalingFilter_NIS,
        );
    }
}
}