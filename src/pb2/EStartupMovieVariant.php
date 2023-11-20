<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EStartupMovieVariant enum
 */
final class EStartupMovieVariant
{
    const k_EStartupMovieVariant_Invalid = 0;
    const k_EStartupMovieVariant_Default = 1;
    const k_EStartupMovieVariant_Orange = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EStartupMovieVariant_Invalid' => self::k_EStartupMovieVariant_Invalid,
            'k_EStartupMovieVariant_Default' => self::k_EStartupMovieVariant_Default,
            'k_EStartupMovieVariant_Orange' => self::k_EStartupMovieVariant_Orange,
        );
    }
}
}