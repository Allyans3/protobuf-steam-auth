<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EHDRVisualization enum
 */
final class EHDRVisualization
{
    const k_EHDRVisualization_None = 0;
    const k_EHDRVisualization_Heatmap = 1;
    const k_EHDRVisualization_Analysis = 2;
    const k_EHDRVisualization_HeatmapExtended = 3;
    const k_EHDRVisualization_HeatmapClassic = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EHDRVisualization_None' => self::k_EHDRVisualization_None,
            'k_EHDRVisualization_Heatmap' => self::k_EHDRVisualization_Heatmap,
            'k_EHDRVisualization_Analysis' => self::k_EHDRVisualization_Analysis,
            'k_EHDRVisualization_HeatmapExtended' => self::k_EHDRVisualization_HeatmapExtended,
            'k_EHDRVisualization_HeatmapClassic' => self::k_EHDRVisualization_HeatmapClassic,
        );
    }
}
}