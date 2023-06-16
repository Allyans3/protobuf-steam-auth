<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EContentCheckProvider enum
 */
final class EContentCheckProvider
{
    const k_EContentCheckProvider_Invalid = 0;
    const k_EContentCheckProvider_Google = 1;
    const k_EContentCheckProvider_Amazon = 2;
    const k_EContentCheckProvider_Local = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EContentCheckProvider_Invalid' => self::k_EContentCheckProvider_Invalid,
            'k_EContentCheckProvider_Google' => self::k_EContentCheckProvider_Google,
            'k_EContentCheckProvider_Amazon' => self::k_EContentCheckProvider_Amazon,
            'k_EContentCheckProvider_Local' => self::k_EContentCheckProvider_Local,
        );
    }
}
}