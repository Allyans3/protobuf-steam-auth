<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ENewSteamAnnouncementState enum
 */
final class ENewSteamAnnouncementState
{
    const k_ENewSteamAnnouncementState_Invalid = 0;
    const k_ENewSteamAnnouncementState_AllRead = 1;
    const k_ENewSteamAnnouncementState_NewAnnouncement = 2;
    const k_ENewSteamAnnouncementState_FeaturedAnnouncement = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ENewSteamAnnouncementState_Invalid' => self::k_ENewSteamAnnouncementState_Invalid,
            'k_ENewSteamAnnouncementState_AllRead' => self::k_ENewSteamAnnouncementState_AllRead,
            'k_ENewSteamAnnouncementState_NewAnnouncement' => self::k_ENewSteamAnnouncementState_NewAnnouncement,
            'k_ENewSteamAnnouncementState_FeaturedAnnouncement' => self::k_ENewSteamAnnouncementState_FeaturedAnnouncement,
        );
    }
}
}