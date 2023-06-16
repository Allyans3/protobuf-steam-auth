<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESteamDeckCompatibilityFeedback enum
 */
final class ESteamDeckCompatibilityFeedback
{
    const k_ESteamDeckCompatibilityFeedback_Unset = 0;
    const k_ESteamDeckCompatibilityFeedback_Agree = 1;
    const k_ESteamDeckCompatibilityFeedback_Disagree = 2;
    const k_ESteamDeckCompatibilityFeedback_Ignore = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESteamDeckCompatibilityFeedback_Unset' => self::k_ESteamDeckCompatibilityFeedback_Unset,
            'k_ESteamDeckCompatibilityFeedback_Agree' => self::k_ESteamDeckCompatibilityFeedback_Agree,
            'k_ESteamDeckCompatibilityFeedback_Disagree' => self::k_ESteamDeckCompatibilityFeedback_Disagree,
            'k_ESteamDeckCompatibilityFeedback_Ignore' => self::k_ESteamDeckCompatibilityFeedback_Ignore,
        );
    }
}
}