<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ESystemDisplayCompatibilityMode enum
 */
final class ESystemDisplayCompatibilityMode
{
    const k_ESystemDisplayCompatibilityMode_Invalid = 0;
    const k_ESystemDisplayCompatibilityMode_None = 1;
    const k_ESystemDisplayCompatibilityMode_MinimalBandwith = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESystemDisplayCompatibilityMode_Invalid' => self::k_ESystemDisplayCompatibilityMode_Invalid,
            'k_ESystemDisplayCompatibilityMode_None' => self::k_ESystemDisplayCompatibilityMode_None,
            'k_ESystemDisplayCompatibilityMode_MinimalBandwith' => self::k_ESystemDisplayCompatibilityMode_MinimalBandwith,
        );
    }
}
}