<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESystemServiceState enum
 */
final class ESystemServiceState
{
    const k_ESystemServiceState_Unavailable = 0;
    const k_ESystemServiceState_Disabled = 1;
    const k_ESystemServiceState_Enabled = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESystemServiceState_Unavailable' => self::k_ESystemServiceState_Unavailable,
            'k_ESystemServiceState_Disabled' => self::k_ESystemServiceState_Disabled,
            'k_ESystemServiceState_Enabled' => self::k_ESystemServiceState_Enabled,
        );
    }
}
}