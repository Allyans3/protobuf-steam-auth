<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESplitScalingScaler enum
 */
final class ESplitScalingScaler
{
    const k_ESplitScalingScaler_Invalid = 0;
    const k_ESplitScalingScaler_Auto = 1;
    const k_ESplitScalingScaler_Integer = 2;
    const k_ESplitScalingScaler_Fit = 3;
    const k_ESplitScalingScaler_Fill = 4;
    const k_ESplitScalingScaler_Stretch = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESplitScalingScaler_Invalid' => self::k_ESplitScalingScaler_Invalid,
            'k_ESplitScalingScaler_Auto' => self::k_ESplitScalingScaler_Auto,
            'k_ESplitScalingScaler_Integer' => self::k_ESplitScalingScaler_Integer,
            'k_ESplitScalingScaler_Fit' => self::k_ESplitScalingScaler_Fit,
            'k_ESplitScalingScaler_Fill' => self::k_ESplitScalingScaler_Fill,
            'k_ESplitScalingScaler_Stretch' => self::k_ESplitScalingScaler_Stretch,
        );
    }
}
}