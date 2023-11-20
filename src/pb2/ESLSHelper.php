<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ESLSHelper enum
 */
final class ESLSHelper
{
    const k_ESLSHelper_Invalid = 0;
    const k_ESLSHelper_Minidump = 1;
    const k_ESLSHelper_Kdump = 2;
    const k_ESLSHelper_Journal = 3;
    const k_ESLSHelper_Gpu = 4;
    const k_ESLSHelper_SystemInfo = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESLSHelper_Invalid' => self::k_ESLSHelper_Invalid,
            'k_ESLSHelper_Minidump' => self::k_ESLSHelper_Minidump,
            'k_ESLSHelper_Kdump' => self::k_ESLSHelper_Kdump,
            'k_ESLSHelper_Journal' => self::k_ESLSHelper_Journal,
            'k_ESLSHelper_Gpu' => self::k_ESLSHelper_Gpu,
            'k_ESLSHelper_SystemInfo' => self::k_ESLSHelper_SystemInfo,
        );
    }
}
}