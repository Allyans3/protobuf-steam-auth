<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EColorGamutLabelSet enum
 */
final class EColorGamutLabelSet
{
    const k_ColorGamutLabelSet_Default = 0;
    const k_ColorGamutLabelSet_sRGB_Native = 1;
    const k_ColorGamutLabelSet_Native_sRGB_Boosted = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ColorGamutLabelSet_Default' => self::k_ColorGamutLabelSet_Default,
            'k_ColorGamutLabelSet_sRGB_Native' => self::k_ColorGamutLabelSet_sRGB_Native,
            'k_ColorGamutLabelSet_Native_sRGB_Boosted' => self::k_ColorGamutLabelSet_Native_sRGB_Boosted,
        );
    }
}
}