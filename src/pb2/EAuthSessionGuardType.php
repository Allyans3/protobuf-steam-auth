<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EAuthSessionGuardType enum
 */
final class EAuthSessionGuardType
{
    const k_EAuthSessionGuardType_Unknown = 0;
    const k_EAuthSessionGuardType_None = 1;
    const k_EAuthSessionGuardType_EmailCode = 2;
    const k_EAuthSessionGuardType_DeviceCode = 3;
    const k_EAuthSessionGuardType_DeviceConfirmation = 4;
    const k_EAuthSessionGuardType_EmailConfirmation = 5;
    const k_EAuthSessionGuardType_MachineToken = 6;
    const k_EAuthSessionGuardType_LegacyMachineAuth = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EAuthSessionGuardType_Unknown' => self::k_EAuthSessionGuardType_Unknown,
            'k_EAuthSessionGuardType_None' => self::k_EAuthSessionGuardType_None,
            'k_EAuthSessionGuardType_EmailCode' => self::k_EAuthSessionGuardType_EmailCode,
            'k_EAuthSessionGuardType_DeviceCode' => self::k_EAuthSessionGuardType_DeviceCode,
            'k_EAuthSessionGuardType_DeviceConfirmation' => self::k_EAuthSessionGuardType_DeviceConfirmation,
            'k_EAuthSessionGuardType_EmailConfirmation' => self::k_EAuthSessionGuardType_EmailConfirmation,
            'k_EAuthSessionGuardType_MachineToken' => self::k_EAuthSessionGuardType_MachineToken,
            'k_EAuthSessionGuardType_LegacyMachineAuth' => self::k_EAuthSessionGuardType_LegacyMachineAuth,
        );
    }
}
}