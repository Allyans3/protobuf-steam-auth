<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EBroadcastEncoderSetting enum
 */
final class EBroadcastEncoderSetting
{
    const k_EBroadcastEncoderBestQuality = 0;
    const k_EBroadcastEncoderBestPerformance = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EBroadcastEncoderBestQuality' => self::k_EBroadcastEncoderBestQuality,
            'k_EBroadcastEncoderBestPerformance' => self::k_EBroadcastEncoderBestPerformance,
        );
    }
}
}