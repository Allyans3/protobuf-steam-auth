<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EPublishedFileQueryType enum
 */
final class EPublishedFileQueryType
{
    const k_PublishedFileQueryType_RankedByVote = 0;
    const k_PublishedFileQueryType_RankedByPublicationDate = 1;
    const k_PublishedFileQueryType_AcceptedForGameRankedByAcceptanceDate = 2;
    const k_PublishedFileQueryType_RankedByTrend = 3;
    const k_PublishedFileQueryType_FavoritedByFriendsRankedByPublicationDate = 4;
    const k_PublishedFileQueryType_CreatedByFriendsRankedByPublicationDate = 5;
    const k_PublishedFileQueryType_RankedByNumTimesReported = 6;
    const k_PublishedFileQueryType_CreatedByFollowedUsersRankedByPublicationDate = 7;
    const k_PublishedFileQueryType_NotYetRated = 8;
    const k_PublishedFileQueryType_RankedByTotalUniqueSubscriptions = 9;
    const k_PublishedFileQueryType_RankedByTotalVotesAsc = 10;
    const k_PublishedFileQueryType_RankedByVotesUp = 11;
    const k_PublishedFileQueryType_RankedByTextSearch = 12;
    const k_PublishedFileQueryType_RankedByPlaytimeTrend = 13;
    const k_PublishedFileQueryType_RankedByTotalPlaytime = 14;
    const k_PublishedFileQueryType_RankedByAveragePlaytimeTrend = 15;
    const k_PublishedFileQueryType_RankedByLifetimeAveragePlaytime = 16;
    const k_PublishedFileQueryType_RankedByPlaytimeSessionsTrend = 17;
    const k_PublishedFileQueryType_RankedByLifetimePlaytimeSessions = 18;
    const k_PublishedFileQueryType_RankedByInappropriateContentRating = 19;
    const k_PublishedFileQueryType_RankedByBanContentCheck = 20;
    const k_PublishedFileQueryType_RankedByLastUpdatedDate = 21;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_PublishedFileQueryType_RankedByVote' => self::k_PublishedFileQueryType_RankedByVote,
            'k_PublishedFileQueryType_RankedByPublicationDate' => self::k_PublishedFileQueryType_RankedByPublicationDate,
            'k_PublishedFileQueryType_AcceptedForGameRankedByAcceptanceDate' => self::k_PublishedFileQueryType_AcceptedForGameRankedByAcceptanceDate,
            'k_PublishedFileQueryType_RankedByTrend' => self::k_PublishedFileQueryType_RankedByTrend,
            'k_PublishedFileQueryType_FavoritedByFriendsRankedByPublicationDate' => self::k_PublishedFileQueryType_FavoritedByFriendsRankedByPublicationDate,
            'k_PublishedFileQueryType_CreatedByFriendsRankedByPublicationDate' => self::k_PublishedFileQueryType_CreatedByFriendsRankedByPublicationDate,
            'k_PublishedFileQueryType_RankedByNumTimesReported' => self::k_PublishedFileQueryType_RankedByNumTimesReported,
            'k_PublishedFileQueryType_CreatedByFollowedUsersRankedByPublicationDate' => self::k_PublishedFileQueryType_CreatedByFollowedUsersRankedByPublicationDate,
            'k_PublishedFileQueryType_NotYetRated' => self::k_PublishedFileQueryType_NotYetRated,
            'k_PublishedFileQueryType_RankedByTotalUniqueSubscriptions' => self::k_PublishedFileQueryType_RankedByTotalUniqueSubscriptions,
            'k_PublishedFileQueryType_RankedByTotalVotesAsc' => self::k_PublishedFileQueryType_RankedByTotalVotesAsc,
            'k_PublishedFileQueryType_RankedByVotesUp' => self::k_PublishedFileQueryType_RankedByVotesUp,
            'k_PublishedFileQueryType_RankedByTextSearch' => self::k_PublishedFileQueryType_RankedByTextSearch,
            'k_PublishedFileQueryType_RankedByPlaytimeTrend' => self::k_PublishedFileQueryType_RankedByPlaytimeTrend,
            'k_PublishedFileQueryType_RankedByTotalPlaytime' => self::k_PublishedFileQueryType_RankedByTotalPlaytime,
            'k_PublishedFileQueryType_RankedByAveragePlaytimeTrend' => self::k_PublishedFileQueryType_RankedByAveragePlaytimeTrend,
            'k_PublishedFileQueryType_RankedByLifetimeAveragePlaytime' => self::k_PublishedFileQueryType_RankedByLifetimeAveragePlaytime,
            'k_PublishedFileQueryType_RankedByPlaytimeSessionsTrend' => self::k_PublishedFileQueryType_RankedByPlaytimeSessionsTrend,
            'k_PublishedFileQueryType_RankedByLifetimePlaytimeSessions' => self::k_PublishedFileQueryType_RankedByLifetimePlaytimeSessions,
            'k_PublishedFileQueryType_RankedByInappropriateContentRating' => self::k_PublishedFileQueryType_RankedByInappropriateContentRating,
            'k_PublishedFileQueryType_RankedByBanContentCheck' => self::k_PublishedFileQueryType_RankedByBanContentCheck,
            'k_PublishedFileQueryType_RankedByLastUpdatedDate' => self::k_PublishedFileQueryType_RankedByLastUpdatedDate,
        );
    }
}
}