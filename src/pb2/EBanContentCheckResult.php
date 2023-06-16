<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EBanContentCheckResult enum
 */
final class EBanContentCheckResult
{
    const k_EBanContentCheckResult_NotScanned = 0;
    const k_EBanContentCheckResult_Reset = 1;
    const k_EBanContentCheckResult_NeedsChecking = 2;
    const k_EBanContentCheckResult_VeryUnlikely = 5;
    const k_EBanContentCheckResult_Unlikely = 30;
    const k_EBanContentCheckResult_Possible = 50;
    const k_EBanContentCheckResult_Likely = 75;
    const k_EBanContentCheckResult_VeryLikely = 100;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EBanContentCheckResult_NotScanned' => self::k_EBanContentCheckResult_NotScanned,
            'k_EBanContentCheckResult_Reset' => self::k_EBanContentCheckResult_Reset,
            'k_EBanContentCheckResult_NeedsChecking' => self::k_EBanContentCheckResult_NeedsChecking,
            'k_EBanContentCheckResult_VeryUnlikely' => self::k_EBanContentCheckResult_VeryUnlikely,
            'k_EBanContentCheckResult_Unlikely' => self::k_EBanContentCheckResult_Unlikely,
            'k_EBanContentCheckResult_Possible' => self::k_EBanContentCheckResult_Possible,
            'k_EBanContentCheckResult_Likely' => self::k_EBanContentCheckResult_Likely,
            'k_EBanContentCheckResult_VeryLikely' => self::k_EBanContentCheckResult_VeryLikely,
        );
    }
}
}