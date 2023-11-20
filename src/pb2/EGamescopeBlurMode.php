<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EGamescopeBlurMode enum
 */
final class EGamescopeBlurMode
{
    const k_EGamescopeBlurMode_Disabled = 0;
    const k_EGamescopeBlurMode_IfOccluded = 1;
    const k_EGamescopeBlurMode_Always = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EGamescopeBlurMode_Disabled' => self::k_EGamescopeBlurMode_Disabled,
            'k_EGamescopeBlurMode_IfOccluded' => self::k_EGamescopeBlurMode_IfOccluded,
            'k_EGamescopeBlurMode_Always' => self::k_EGamescopeBlurMode_Always,
        );
    }
}
}