<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EUpdaterState enum
 */
final class EUpdaterState
{
    const k_EUpdaterState_Invalid = 0;
    const k_EUpdaterState_UpToDate = 2;
    const k_EUpdaterState_Checking = 3;
    const k_EUpdaterState_Available = 4;
    const k_EUpdaterState_Applying = 5;
    const k_EUpdaterState_ClientRestartPending = 6;
    const k_EUpdaterState_SystemRestartPending = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EUpdaterState_Invalid' => self::k_EUpdaterState_Invalid,
            'k_EUpdaterState_UpToDate' => self::k_EUpdaterState_UpToDate,
            'k_EUpdaterState_Checking' => self::k_EUpdaterState_Checking,
            'k_EUpdaterState_Available' => self::k_EUpdaterState_Available,
            'k_EUpdaterState_Applying' => self::k_EUpdaterState_Applying,
            'k_EUpdaterState_ClientRestartPending' => self::k_EUpdaterState_ClientRestartPending,
            'k_EUpdaterState_SystemRestartPending' => self::k_EUpdaterState_SystemRestartPending,
        );
    }
}
}