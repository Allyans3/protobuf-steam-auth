<?php
/**
 * Auto generated from enums.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * ESessionPersistence enum
 */
final class ESessionPersistence
{
    const k_ESessionPersistence_Invalid = -1;
    const k_ESessionPersistence_Ephemeral = 0;
    const k_ESessionPersistence_Persistent = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESessionPersistence_Invalid' => self::k_ESessionPersistence_Invalid,
            'k_ESessionPersistence_Ephemeral' => self::k_ESessionPersistence_Ephemeral,
            'k_ESessionPersistence_Persistent' => self::k_ESessionPersistence_Persistent,
        );
    }
}
}