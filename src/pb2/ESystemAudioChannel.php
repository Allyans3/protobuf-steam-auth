<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ESystemAudioChannel enum
 */
final class ESystemAudioChannel
{
    const k_SystemAudioChannel_Invalid = 0;
    const k_SystemAudioChannel_Aggregated = 1;
    const k_SystemAudioChannel_FrontLeft = 2;
    const k_SystemAudioChannel_FrontRight = 3;
    const k_SystemAudioChannel_LFE = 4;
    const k_SystemAudioChannel_BackLeft = 5;
    const k_SystemAudioChannel_BackRight = 6;
    const k_SystemAudioChannel_FrontCenter = 7;
    const k_SystemAudioChannel_Unknown = 8;
    const k_SystemAudioChannel_Mono = 9;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_SystemAudioChannel_Invalid' => self::k_SystemAudioChannel_Invalid,
            'k_SystemAudioChannel_Aggregated' => self::k_SystemAudioChannel_Aggregated,
            'k_SystemAudioChannel_FrontLeft' => self::k_SystemAudioChannel_FrontLeft,
            'k_SystemAudioChannel_FrontRight' => self::k_SystemAudioChannel_FrontRight,
            'k_SystemAudioChannel_LFE' => self::k_SystemAudioChannel_LFE,
            'k_SystemAudioChannel_BackLeft' => self::k_SystemAudioChannel_BackLeft,
            'k_SystemAudioChannel_BackRight' => self::k_SystemAudioChannel_BackRight,
            'k_SystemAudioChannel_FrontCenter' => self::k_SystemAudioChannel_FrontCenter,
            'k_SystemAudioChannel_Unknown' => self::k_SystemAudioChannel_Unknown,
            'k_SystemAudioChannel_Mono' => self::k_SystemAudioChannel_Mono,
        );
    }
}
}