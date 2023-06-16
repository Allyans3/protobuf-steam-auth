<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EPersonaStateFlag enum
 */
final class EPersonaStateFlag
{
    const k_EPersonaStateFlag_HasRichPresence = 1;
    const k_EPersonaStateFlag_InJoinableGame = 2;
    const k_EPersonaStateFlag_Golden = 4;
    const k_EPersonaStateFlag_RemotePlayTogether = 8;
    const k_EPersonaStateFlag_ClientTypeWeb = 256;
    const k_EPersonaStateFlag_ClientTypeMobile = 512;
    const k_EPersonaStateFlag_ClientTypeTenfoot = 1024;
    const k_EPersonaStateFlag_ClientTypeVR = 2048;
    const k_EPersonaStateFlag_LaunchTypeGamepad = 4096;
    const k_EPersonaStateFlag_LaunchTypeCompatTool = 8192;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EPersonaStateFlag_HasRichPresence' => self::k_EPersonaStateFlag_HasRichPresence,
            'k_EPersonaStateFlag_InJoinableGame' => self::k_EPersonaStateFlag_InJoinableGame,
            'k_EPersonaStateFlag_Golden' => self::k_EPersonaStateFlag_Golden,
            'k_EPersonaStateFlag_RemotePlayTogether' => self::k_EPersonaStateFlag_RemotePlayTogether,
            'k_EPersonaStateFlag_ClientTypeWeb' => self::k_EPersonaStateFlag_ClientTypeWeb,
            'k_EPersonaStateFlag_ClientTypeMobile' => self::k_EPersonaStateFlag_ClientTypeMobile,
            'k_EPersonaStateFlag_ClientTypeTenfoot' => self::k_EPersonaStateFlag_ClientTypeTenfoot,
            'k_EPersonaStateFlag_ClientTypeVR' => self::k_EPersonaStateFlag_ClientTypeVR,
            'k_EPersonaStateFlag_LaunchTypeGamepad' => self::k_EPersonaStateFlag_LaunchTypeGamepad,
            'k_EPersonaStateFlag_LaunchTypeCompatTool' => self::k_EPersonaStateFlag_LaunchTypeCompatTool,
        );
    }
}
}