<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EUpdaterType enum
 */
final class EUpdaterType
{
    const k_EUpdaterType_Invalid = 0;
    const k_EUpdaterType_Client = 1;
    const k_EUpdaterType_OS = 2;
    const k_EUpdaterType_BIOS = 3;
    const k_EUpdaterType_Aggregated = 4;
    const k_EUpdaterType_Test1 = 5;
    const k_EUpdaterType_Test2 = 6;
    const k_EUpdaterType_Dummy = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EUpdaterType_Invalid' => self::k_EUpdaterType_Invalid,
            'k_EUpdaterType_Client' => self::k_EUpdaterType_Client,
            'k_EUpdaterType_OS' => self::k_EUpdaterType_OS,
            'k_EUpdaterType_BIOS' => self::k_EUpdaterType_BIOS,
            'k_EUpdaterType_Aggregated' => self::k_EUpdaterType_Aggregated,
            'k_EUpdaterType_Test1' => self::k_EUpdaterType_Test1,
            'k_EUpdaterType_Test2' => self::k_EUpdaterType_Test2,
            'k_EUpdaterType_Dummy' => self::k_EUpdaterType_Dummy,
        );
    }
}
}