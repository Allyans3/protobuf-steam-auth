<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESteamDeckCompatibilityCategory enum
 */
final class ESteamDeckCompatibilityCategory
{
    const k_ESteamDeckCompatibilityCategory_Unknown = 0;
    const k_ESteamDeckCompatibilityCategory_Unsupported = 1;
    const k_ESteamDeckCompatibilityCategory_Playable = 2;
    const k_ESteamDeckCompatibilityCategory_Verified = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESteamDeckCompatibilityCategory_Unknown' => self::k_ESteamDeckCompatibilityCategory_Unknown,
            'k_ESteamDeckCompatibilityCategory_Unsupported' => self::k_ESteamDeckCompatibilityCategory_Unsupported,
            'k_ESteamDeckCompatibilityCategory_Playable' => self::k_ESteamDeckCompatibilityCategory_Playable,
            'k_ESteamDeckCompatibilityCategory_Verified' => self::k_ESteamDeckCompatibilityCategory_Verified,
        );
    }
}
}