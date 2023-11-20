<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EHDRToneMapOperator enum
 */
final class EHDRToneMapOperator
{
    const k_EHDRToneMapOperator_Invalid = 0;
    const k_EHDRToneMapOperator_Uncharted = 1;
    const k_EHDRToneMapOperator_Reinhard = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EHDRToneMapOperator_Invalid' => self::k_EHDRToneMapOperator_Invalid,
            'k_EHDRToneMapOperator_Uncharted' => self::k_EHDRToneMapOperator_Uncharted,
            'k_EHDRToneMapOperator_Reinhard' => self::k_EHDRToneMapOperator_Reinhard,
        );
    }
}
}