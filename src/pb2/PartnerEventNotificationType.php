<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * PartnerEventNotificationType enum
 */
final class PartnerEventNotificationType
{
    const k_EEventStart = 0;
    const k_EEventBroadcastStart = 1;
    const k_EEventMatchStart = 2;
    const k_EEventPartnerMaxType = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EEventStart' => self::k_EEventStart,
            'k_EEventBroadcastStart' => self::k_EEventBroadcastStart,
            'k_EEventMatchStart' => self::k_EEventMatchStart,
            'k_EEventPartnerMaxType' => self::k_EEventPartnerMaxType,
        );
    }
}
}