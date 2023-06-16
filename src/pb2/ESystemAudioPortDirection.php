<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESystemAudioPortDirection enum
 */
final class ESystemAudioPortDirection
{
    const k_SystemAudioPortDirection_Invalid = 0;
    const k_SystemAudioPortDirection_Input = 1;
    const k_SystemAudioPortDirection_Output = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_SystemAudioPortDirection_Invalid' => self::k_SystemAudioPortDirection_Invalid,
            'k_SystemAudioPortDirection_Input' => self::k_SystemAudioPortDirection_Input,
            'k_SystemAudioPortDirection_Output' => self::k_SystemAudioPortDirection_Output,
        );
    }
}
}