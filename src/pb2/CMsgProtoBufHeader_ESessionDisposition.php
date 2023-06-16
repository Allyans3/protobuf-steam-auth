<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ESessionDisposition enum embedded in CMsgProtoBufHeader message
 */
final class CMsgProtoBufHeader_ESessionDisposition
{
    const k_ESessionDispositionNormal = 0;
    const k_ESessionDispositionDisconnect = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ESessionDispositionNormal' => self::k_ESessionDispositionNormal,
            'k_ESessionDispositionDisconnect' => self::k_ESessionDispositionDisconnect,
        );
    }
}
}