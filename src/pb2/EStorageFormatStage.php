<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EStorageFormatStage enum
 */
final class EStorageFormatStage
{
    const k_EStorageFormatStage_Invalid = 0;
    const k_EStorageFormatStage_NotRunning = 1;
    const k_EStorageFormatStage_Starting = 2;
    const k_EStorageFormatStage_Testing = 3;
    const k_EStorageFormatStage_Rescuing = 4;
    const k_EStorageFormatStage_Formatting = 5;
    const k_EStorageFormatStage_Finalizing = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EStorageFormatStage_Invalid' => self::k_EStorageFormatStage_Invalid,
            'k_EStorageFormatStage_NotRunning' => self::k_EStorageFormatStage_NotRunning,
            'k_EStorageFormatStage_Starting' => self::k_EStorageFormatStage_Starting,
            'k_EStorageFormatStage_Testing' => self::k_EStorageFormatStage_Testing,
            'k_EStorageFormatStage_Rescuing' => self::k_EStorageFormatStage_Rescuing,
            'k_EStorageFormatStage_Formatting' => self::k_EStorageFormatStage_Formatting,
            'k_EStorageFormatStage_Finalizing' => self::k_EStorageFormatStage_Finalizing,
        );
    }
}
}