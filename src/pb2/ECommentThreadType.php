<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ECommentThreadType enum
 */
final class ECommentThreadType
{
    const k_ECommentThreadTypeInvalid = 0;
    const k_ECommentThreadTypeScreenshot_Deprecated = 1;
    const k_ECommentThreadTypeWorkshopAccount_Developer = 2;
    const k_ECommentThreadTypeWorkshopAccount_Public = 3;
    const k_ECommentThreadTypePublishedFile_Developer = 4;
    const k_ECommentThreadTypePublishedFile_Public = 5;
    const k_ECommentThreadTypeTest = 6;
    const k_ECommentThreadTypeForumTopic = 7;
    const k_ECommentThreadTypeRecommendation = 8;
    const k_ECommentThreadTypeVideo_Deprecated = 9;
    const k_ECommentThreadTypeProfile = 10;
    const k_ECommentThreadTypeNewsPost = 11;
    const k_ECommentThreadTypeClan = 12;
    const k_ECommentThreadTypeClanAnnouncement = 13;
    const k_ECommentThreadTypeClanEvent = 14;
    const k_ECommentThreadTypeUserStatusPublished = 15;
    const k_ECommentThreadTypeUserReceivedNewGame = 16;
    const k_ECommentThreadTypePublishedFile_Announcement = 17;
    const k_ECommentThreadTypeModeratorMessage = 18;
    const k_ECommentThreadTypeClanCuratedApp = 19;
    const k_ECommentThreadTypeQAndASession = 20;
    const k_ECommentThreadTypeMax = 21;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ECommentThreadTypeInvalid' => self::k_ECommentThreadTypeInvalid,
            'k_ECommentThreadTypeScreenshot_Deprecated' => self::k_ECommentThreadTypeScreenshot_Deprecated,
            'k_ECommentThreadTypeWorkshopAccount_Developer' => self::k_ECommentThreadTypeWorkshopAccount_Developer,
            'k_ECommentThreadTypeWorkshopAccount_Public' => self::k_ECommentThreadTypeWorkshopAccount_Public,
            'k_ECommentThreadTypePublishedFile_Developer' => self::k_ECommentThreadTypePublishedFile_Developer,
            'k_ECommentThreadTypePublishedFile_Public' => self::k_ECommentThreadTypePublishedFile_Public,
            'k_ECommentThreadTypeTest' => self::k_ECommentThreadTypeTest,
            'k_ECommentThreadTypeForumTopic' => self::k_ECommentThreadTypeForumTopic,
            'k_ECommentThreadTypeRecommendation' => self::k_ECommentThreadTypeRecommendation,
            'k_ECommentThreadTypeVideo_Deprecated' => self::k_ECommentThreadTypeVideo_Deprecated,
            'k_ECommentThreadTypeProfile' => self::k_ECommentThreadTypeProfile,
            'k_ECommentThreadTypeNewsPost' => self::k_ECommentThreadTypeNewsPost,
            'k_ECommentThreadTypeClan' => self::k_ECommentThreadTypeClan,
            'k_ECommentThreadTypeClanAnnouncement' => self::k_ECommentThreadTypeClanAnnouncement,
            'k_ECommentThreadTypeClanEvent' => self::k_ECommentThreadTypeClanEvent,
            'k_ECommentThreadTypeUserStatusPublished' => self::k_ECommentThreadTypeUserStatusPublished,
            'k_ECommentThreadTypeUserReceivedNewGame' => self::k_ECommentThreadTypeUserReceivedNewGame,
            'k_ECommentThreadTypePublishedFile_Announcement' => self::k_ECommentThreadTypePublishedFile_Announcement,
            'k_ECommentThreadTypeModeratorMessage' => self::k_ECommentThreadTypeModeratorMessage,
            'k_ECommentThreadTypeClanCuratedApp' => self::k_ECommentThreadTypeClanCuratedApp,
            'k_ECommentThreadTypeQAndASession' => self::k_ECommentThreadTypeQAndASession,
            'k_ECommentThreadTypeMax' => self::k_ECommentThreadTypeMax,
        );
    }
}
}