<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESystemAudioDirection enum
 */
final class ESystemAudioDirection
{
    const k_SystemAudioDirection_Invalid = 0;
    const k_SystemAudioDirection_Input = 1;
    const k_SystemAudioDirection_Output = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_SystemAudioDirection_Invalid' => self::k_SystemAudioDirection_Invalid,
            'k_SystemAudioDirection_Input' => self::k_SystemAudioDirection_Input,
            'k_SystemAudioDirection_Output' => self::k_SystemAudioDirection_Output,
        );
    }
}
}