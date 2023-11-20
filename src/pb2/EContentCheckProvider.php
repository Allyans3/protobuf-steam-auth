<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * EContentCheckProvider enum
 */
final class EContentCheckProvider
{
    const k_EContentCheckProvider_Invalid = 0;
    const k_EContentCheckProvider_Google_DEPRECATED = 1;
    const k_EContentCheckProvider_Amazon = 2;
    const k_EContentCheckProvider_Local = 3;
    const k_EContentCheckProvider_GoogleVertexAI = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EContentCheckProvider_Invalid' => self::k_EContentCheckProvider_Invalid,
            'k_EContentCheckProvider_Google_DEPRECATED' => self::k_EContentCheckProvider_Google_DEPRECATED,
            'k_EContentCheckProvider_Amazon' => self::k_EContentCheckProvider_Amazon,
            'k_EContentCheckProvider_Local' => self::k_EContentCheckProvider_Local,
            'k_EContentCheckProvider_GoogleVertexAI' => self::k_EContentCheckProvider_GoogleVertexAI,
        );
    }
}
}