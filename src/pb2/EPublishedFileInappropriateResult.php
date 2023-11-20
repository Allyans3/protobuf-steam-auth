<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EPublishedFileInappropriateResult enum
 */
final class EPublishedFileInappropriateResult
{
    const k_EPublishedFileInappropriateResult_NotScanned = 0;
    const k_EPublishedFileInappropriateResult_VeryUnlikely = 1;
    const k_EPublishedFileInappropriateResult_Unlikely = 30;
    const k_EPublishedFileInappropriateResult_Possible = 50;
    const k_EPublishedFileInappropriateResult_Likely = 75;
    const k_EPublishedFileInappropriateResult_VeryLikely = 100;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EPublishedFileInappropriateResult_NotScanned' => self::k_EPublishedFileInappropriateResult_NotScanned,
            'k_EPublishedFileInappropriateResult_VeryUnlikely' => self::k_EPublishedFileInappropriateResult_VeryUnlikely,
            'k_EPublishedFileInappropriateResult_Unlikely' => self::k_EPublishedFileInappropriateResult_Unlikely,
            'k_EPublishedFileInappropriateResult_Possible' => self::k_EPublishedFileInappropriateResult_Possible,
            'k_EPublishedFileInappropriateResult_Likely' => self::k_EPublishedFileInappropriateResult_Likely,
            'k_EPublishedFileInappropriateResult_VeryLikely' => self::k_EPublishedFileInappropriateResult_VeryLikely,
        );
    }
}
}