<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ESystemAudioPortType enum
 */
final class ESystemAudioPortType
{
    const k_SystemAudioPortType_Invalid = 0;
    const k_SystemAudioPortType_Unknown = 1;
    const k_SystemAudioPortType_Audio32f = 2;
    const k_SystemAudioPortType_Midi8b = 3;
    const k_SystemAudioPortType_Video32RGBA = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_SystemAudioPortType_Invalid' => self::k_SystemAudioPortType_Invalid,
            'k_SystemAudioPortType_Unknown' => self::k_SystemAudioPortType_Unknown,
            'k_SystemAudioPortType_Audio32f' => self::k_SystemAudioPortType_Audio32f,
            'k_SystemAudioPortType_Midi8b' => self::k_SystemAudioPortType_Midi8b,
            'k_SystemAudioPortType_Video32RGBA' => self::k_SystemAudioPortType_Video32RGBA,
        );
    }
}
}