<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ESplitScalingFilter enum
 */
final class ESplitScalingFilter
{
    const k_ESplitScalingFilter_Invalid = 0;
    const k_ESplitScalingFilter_Linear = 1;
    const k_ESplitScalingFilter_Nearest = 2;
    const k_ESplitScalingFilter_FSR = 3;
    const k_ESplitScalingFilter_NIS = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESplitScalingFilter_Invalid' => self::k_ESplitScalingFilter_Invalid,
            'k_ESplitScalingFilter_Linear' => self::k_ESplitScalingFilter_Linear,
            'k_ESplitScalingFilter_Nearest' => self::k_ESplitScalingFilter_Nearest,
            'k_ESplitScalingFilter_FSR' => self::k_ESplitScalingFilter_FSR,
            'k_ESplitScalingFilter_NIS' => self::k_ESplitScalingFilter_NIS,
        );
    }
}
}