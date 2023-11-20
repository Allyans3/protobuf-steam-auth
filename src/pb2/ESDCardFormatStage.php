<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ESDCardFormatStage enum
 */
final class ESDCardFormatStage
{
    const k_ESDCardFormatStage_Invalid = 0;
    const k_ESDCardFormatStage_Starting = 1;
    const k_ESDCardFormatStage_Testing = 2;
    const k_ESDCardFormatStage_Rescuing = 3;
    const k_ESDCardFormatStage_Formatting = 4;
    const k_ESDCardFormatStage_Finalizing = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESDCardFormatStage_Invalid' => self::k_ESDCardFormatStage_Invalid,
            'k_ESDCardFormatStage_Starting' => self::k_ESDCardFormatStage_Starting,
            'k_ESDCardFormatStage_Testing' => self::k_ESDCardFormatStage_Testing,
            'k_ESDCardFormatStage_Rescuing' => self::k_ESDCardFormatStage_Rescuing,
            'k_ESDCardFormatStage_Formatting' => self::k_ESDCardFormatStage_Formatting,
            'k_ESDCardFormatStage_Finalizing' => self::k_ESDCardFormatStage_Finalizing,
        );
    }
}
}