<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESteamDeckCompatibilityResultDisplayType enum
 */
final class ESteamDeckCompatibilityResultDisplayType
{
    const k_ESteamDeckCompatibilityResultDisplayType_Invisible = 0;
    const k_ESteamDeckCompatibilityResultDisplayType_Informational = 1;
    const k_ESteamDeckCompatibilityResultDisplayType_Unsupported = 2;
    const k_ESteamDeckCompatibilityResultDisplayType_Playable = 3;
    const k_ESteamDeckCompatibilityResultDisplayType_Verified = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESteamDeckCompatibilityResultDisplayType_Invisible' => self::k_ESteamDeckCompatibilityResultDisplayType_Invisible,
            'k_ESteamDeckCompatibilityResultDisplayType_Informational' => self::k_ESteamDeckCompatibilityResultDisplayType_Informational,
            'k_ESteamDeckCompatibilityResultDisplayType_Unsupported' => self::k_ESteamDeckCompatibilityResultDisplayType_Unsupported,
            'k_ESteamDeckCompatibilityResultDisplayType_Playable' => self::k_ESteamDeckCompatibilityResultDisplayType_Playable,
            'k_ESteamDeckCompatibilityResultDisplayType_Verified' => self::k_ESteamDeckCompatibilityResultDisplayType_Verified,
        );
    }
}
}