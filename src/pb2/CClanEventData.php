<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CClanEventData message
 */
class CClanEventData extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const CLAN_STEAMID = 2;
    const EVENT_NAME = 3;
    const EVENT_TYPE = 4;
    const APPID = 5;
    const SERVER_ADDRESS = 6;
    const SERVER_PASSWORD = 7;
    const RTIME32_START_TIME = 8;
    const RTIME32_END_TIME = 9;
    const COMMENT_COUNT = 10;
    const CREATOR_STEAMID = 11;
    const LAST_UPDATE_STEAMID = 12;
    const EVENT_NOTES = 13;
    const JSONDATA = 14;
    const ANNOUNCEMENT_BODY = 15;
    const PUBLISHED = 16;
    const HIDDEN = 17;
    const RTIME32_VISIBILITY_START = 18;
    const RTIME32_VISIBILITY_END = 19;
    const BROADCASTER_ACCOUNTID = 20;
    const FOLLOWER_COUNT = 21;
    const IGNORE_COUNT = 22;
    const FORUM_TOPIC_ID = 23;
    const RTIME32_LAST_MODIFIED = 24;
    const NEWS_POST_GID = 25;
    const RTIME_MOD_REVIEWED = 26;
    const FEATURED_APP_TAGID = 27;
    const REFERENCED_APPIDS = 28;
    const BUILD_ID = 29;
    const BUILD_BRANCH = 30;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::CLAN_STEAMID => array(
            'name' => 'clan_steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::EVENT_NAME => array(
            'name' => 'event_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EVENT_TYPE => array(
            'default' => EProtoClanEventType::k_EClanOtherEvent,
            'name' => 'event_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::APPID => array(
            'name' => 'appid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SERVER_ADDRESS => array(
            'name' => 'server_address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SERVER_PASSWORD => array(
            'name' => 'server_password',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RTIME32_START_TIME => array(
            'name' => 'rtime32_start_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RTIME32_END_TIME => array(
            'name' => 'rtime32_end_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMENT_COUNT => array(
            'name' => 'comment_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATOR_STEAMID => array(
            'name' => 'creator_steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::LAST_UPDATE_STEAMID => array(
            'name' => 'last_update_steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::EVENT_NOTES => array(
            'name' => 'event_notes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JSONDATA => array(
            'name' => 'jsondata',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ANNOUNCEMENT_BODY => array(
            'name' => 'announcement_body',
            'required' => false,
            'type' => CCommunity_ClanAnnouncementInfo::class
        ),
        self::PUBLISHED => array(
            'name' => 'published',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::HIDDEN => array(
            'name' => 'hidden',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::RTIME32_VISIBILITY_START => array(
            'name' => 'rtime32_visibility_start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RTIME32_VISIBILITY_END => array(
            'name' => 'rtime32_visibility_end',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BROADCASTER_ACCOUNTID => array(
            'name' => 'broadcaster_accountid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FOLLOWER_COUNT => array(
            'name' => 'follower_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IGNORE_COUNT => array(
            'name' => 'ignore_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FORUM_TOPIC_ID => array(
            'name' => 'forum_topic_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::RTIME32_LAST_MODIFIED => array(
            'name' => 'rtime32_last_modified',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWS_POST_GID => array(
            'name' => 'news_post_gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::RTIME_MOD_REVIEWED => array(
            'name' => 'rtime_mod_reviewed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FEATURED_APP_TAGID => array(
            'name' => 'featured_app_tagid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFERENCED_APPIDS => array(
            'name' => 'referenced_appids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUILD_ID => array(
            'name' => 'build_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUILD_BRANCH => array(
            'name' => 'build_branch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::GID] = null;
        $this->values[self::CLAN_STEAMID] = null;
        $this->values[self::EVENT_NAME] = null;
        $this->values[self::EVENT_TYPE] = self::$fields[self::EVENT_TYPE]['default'];
        $this->values[self::APPID] = null;
        $this->values[self::SERVER_ADDRESS] = null;
        $this->values[self::SERVER_PASSWORD] = null;
        $this->values[self::RTIME32_START_TIME] = null;
        $this->values[self::RTIME32_END_TIME] = null;
        $this->values[self::COMMENT_COUNT] = null;
        $this->values[self::CREATOR_STEAMID] = null;
        $this->values[self::LAST_UPDATE_STEAMID] = null;
        $this->values[self::EVENT_NOTES] = null;
        $this->values[self::JSONDATA] = null;
        $this->values[self::ANNOUNCEMENT_BODY] = null;
        $this->values[self::PUBLISHED] = null;
        $this->values[self::HIDDEN] = null;
        $this->values[self::RTIME32_VISIBILITY_START] = null;
        $this->values[self::RTIME32_VISIBILITY_END] = null;
        $this->values[self::BROADCASTER_ACCOUNTID] = null;
        $this->values[self::FOLLOWER_COUNT] = null;
        $this->values[self::IGNORE_COUNT] = null;
        $this->values[self::FORUM_TOPIC_ID] = null;
        $this->values[self::RTIME32_LAST_MODIFIED] = null;
        $this->values[self::NEWS_POST_GID] = null;
        $this->values[self::RTIME_MOD_REVIEWED] = null;
        $this->values[self::FEATURED_APP_TAGID] = null;
        $this->values[self::REFERENCED_APPIDS] = array();
        $this->values[self::BUILD_ID] = null;
        $this->values[self::BUILD_BRANCH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGid($value)
    {
        return $this->set(self::GID, $value);
    }

    /**
     * Returns value of 'gid' property
     *
     * @return integer
     */
    public function getGid()
    {
        $value = $this->get(self::GID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGid()
    {
        return $this->get(self::GID) !== null;
    }

    /**
     * Sets value of 'clan_steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClanSteamid($value)
    {
        return $this->set(self::CLAN_STEAMID, $value);
    }

    /**
     * Returns value of 'clan_steamid' property
     *
     * @return integer
     */
    public function getClanSteamid()
    {
        $value = $this->get(self::CLAN_STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clan_steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClanSteamid()
    {
        return $this->get(self::CLAN_STEAMID) !== null;
    }

    /**
     * Sets value of 'event_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventName($value)
    {
        return $this->set(self::EVENT_NAME, $value);
    }

    /**
     * Returns value of 'event_name' property
     *
     * @return string
     */
    public function getEventName()
    {
        $value = $this->get(self::EVENT_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'event_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventName()
    {
        return $this->get(self::EVENT_NAME) !== null;
    }

    /**
     * Sets value of 'event_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENT_TYPE, $value);
    }

    /**
     * Returns value of 'event_type' property
     *
     * @return integer
     */
    public function getEventType()
    {
        $value = $this->get(self::EVENT_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'event_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventType()
    {
        return $this->get(self::EVENT_TYPE) !== null;
    }

    /**
     * Sets value of 'appid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAppid($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appid' property
     *
     * @return integer
     */
    public function getAppid()
    {
        $value = $this->get(self::APPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'appid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppid()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'server_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServerAddress($value)
    {
        return $this->set(self::SERVER_ADDRESS, $value);
    }

    /**
     * Returns value of 'server_address' property
     *
     * @return string
     */
    public function getServerAddress()
    {
        $value = $this->get(self::SERVER_ADDRESS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'server_address' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerAddress()
    {
        return $this->get(self::SERVER_ADDRESS) !== null;
    }

    /**
     * Sets value of 'server_password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServerPassword($value)
    {
        return $this->set(self::SERVER_PASSWORD, $value);
    }

    /**
     * Returns value of 'server_password' property
     *
     * @return string
     */
    public function getServerPassword()
    {
        $value = $this->get(self::SERVER_PASSWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'server_password' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerPassword()
    {
        return $this->get(self::SERVER_PASSWORD) !== null;
    }

    /**
     * Sets value of 'rtime32_start_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtime32StartTime($value)
    {
        return $this->set(self::RTIME32_START_TIME, $value);
    }

    /**
     * Returns value of 'rtime32_start_time' property
     *
     * @return integer
     */
    public function getRtime32StartTime()
    {
        $value = $this->get(self::RTIME32_START_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime32_start_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtime32StartTime()
    {
        return $this->get(self::RTIME32_START_TIME) !== null;
    }

    /**
     * Sets value of 'rtime32_end_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtime32EndTime($value)
    {
        return $this->set(self::RTIME32_END_TIME, $value);
    }

    /**
     * Returns value of 'rtime32_end_time' property
     *
     * @return integer
     */
    public function getRtime32EndTime()
    {
        $value = $this->get(self::RTIME32_END_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime32_end_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtime32EndTime()
    {
        return $this->get(self::RTIME32_END_TIME) !== null;
    }

    /**
     * Sets value of 'comment_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommentCount($value)
    {
        return $this->set(self::COMMENT_COUNT, $value);
    }

    /**
     * Returns value of 'comment_count' property
     *
     * @return integer
     */
    public function getCommentCount()
    {
        $value = $this->get(self::COMMENT_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'comment_count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentCount()
    {
        return $this->get(self::COMMENT_COUNT) !== null;
    }

    /**
     * Sets value of 'creator_steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreatorSteamid($value)
    {
        return $this->set(self::CREATOR_STEAMID, $value);
    }

    /**
     * Returns value of 'creator_steamid' property
     *
     * @return integer
     */
    public function getCreatorSteamid()
    {
        $value = $this->get(self::CREATOR_STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'creator_steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreatorSteamid()
    {
        return $this->get(self::CREATOR_STEAMID) !== null;
    }

    /**
     * Sets value of 'last_update_steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastUpdateSteamid($value)
    {
        return $this->set(self::LAST_UPDATE_STEAMID, $value);
    }

    /**
     * Returns value of 'last_update_steamid' property
     *
     * @return integer
     */
    public function getLastUpdateSteamid()
    {
        $value = $this->get(self::LAST_UPDATE_STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'last_update_steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastUpdateSteamid()
    {
        return $this->get(self::LAST_UPDATE_STEAMID) !== null;
    }

    /**
     * Sets value of 'event_notes' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventNotes($value)
    {
        return $this->set(self::EVENT_NOTES, $value);
    }

    /**
     * Returns value of 'event_notes' property
     *
     * @return string
     */
    public function getEventNotes()
    {
        $value = $this->get(self::EVENT_NOTES);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'event_notes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventNotes()
    {
        return $this->get(self::EVENT_NOTES) !== null;
    }

    /**
     * Sets value of 'jsondata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJsondata($value)
    {
        return $this->set(self::JSONDATA, $value);
    }

    /**
     * Returns value of 'jsondata' property
     *
     * @return string
     */
    public function getJsondata()
    {
        $value = $this->get(self::JSONDATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'jsondata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJsondata()
    {
        return $this->get(self::JSONDATA) !== null;
    }

    /**
     * Sets value of 'announcement_body' property
     *
     * @param CCommunity_ClanAnnouncementInfo $value Property value
     *
     * @return null
     */
    public function setAnnouncementBody(CCommunity_ClanAnnouncementInfo $value=null)
    {
        return $this->set(self::ANNOUNCEMENT_BODY, $value);
    }

    /**
     * Returns value of 'announcement_body' property
     *
     * @return CCommunity_ClanAnnouncementInfo
     */
    public function getAnnouncementBody()
    {
        return $this->get(self::ANNOUNCEMENT_BODY);
    }

    /**
     * Returns true if 'announcement_body' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnnouncementBody()
    {
        return $this->get(self::ANNOUNCEMENT_BODY) !== null;
    }

    /**
     * Sets value of 'published' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPublished($value)
    {
        return $this->set(self::PUBLISHED, $value);
    }

    /**
     * Returns value of 'published' property
     *
     * @return boolean
     */
    public function getPublished()
    {
        $value = $this->get(self::PUBLISHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'published' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublished()
    {
        return $this->get(self::PUBLISHED) !== null;
    }

    /**
     * Sets value of 'hidden' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHidden($value)
    {
        return $this->set(self::HIDDEN, $value);
    }

    /**
     * Returns value of 'hidden' property
     *
     * @return boolean
     */
    public function getHidden()
    {
        $value = $this->get(self::HIDDEN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'hidden' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHidden()
    {
        return $this->get(self::HIDDEN) !== null;
    }

    /**
     * Sets value of 'rtime32_visibility_start' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtime32VisibilityStart($value)
    {
        return $this->set(self::RTIME32_VISIBILITY_START, $value);
    }

    /**
     * Returns value of 'rtime32_visibility_start' property
     *
     * @return integer
     */
    public function getRtime32VisibilityStart()
    {
        $value = $this->get(self::RTIME32_VISIBILITY_START);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime32_visibility_start' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtime32VisibilityStart()
    {
        return $this->get(self::RTIME32_VISIBILITY_START) !== null;
    }

    /**
     * Sets value of 'rtime32_visibility_end' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtime32VisibilityEnd($value)
    {
        return $this->set(self::RTIME32_VISIBILITY_END, $value);
    }

    /**
     * Returns value of 'rtime32_visibility_end' property
     *
     * @return integer
     */
    public function getRtime32VisibilityEnd()
    {
        $value = $this->get(self::RTIME32_VISIBILITY_END);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime32_visibility_end' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtime32VisibilityEnd()
    {
        return $this->get(self::RTIME32_VISIBILITY_END) !== null;
    }

    /**
     * Sets value of 'broadcaster_accountid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBroadcasterAccountid($value)
    {
        return $this->set(self::BROADCASTER_ACCOUNTID, $value);
    }

    /**
     * Returns value of 'broadcaster_accountid' property
     *
     * @return integer
     */
    public function getBroadcasterAccountid()
    {
        $value = $this->get(self::BROADCASTER_ACCOUNTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'broadcaster_accountid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBroadcasterAccountid()
    {
        return $this->get(self::BROADCASTER_ACCOUNTID) !== null;
    }

    /**
     * Sets value of 'follower_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFollowerCount($value)
    {
        return $this->set(self::FOLLOWER_COUNT, $value);
    }

    /**
     * Returns value of 'follower_count' property
     *
     * @return integer
     */
    public function getFollowerCount()
    {
        $value = $this->get(self::FOLLOWER_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'follower_count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFollowerCount()
    {
        return $this->get(self::FOLLOWER_COUNT) !== null;
    }

    /**
     * Sets value of 'ignore_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIgnoreCount($value)
    {
        return $this->set(self::IGNORE_COUNT, $value);
    }

    /**
     * Returns value of 'ignore_count' property
     *
     * @return integer
     */
    public function getIgnoreCount()
    {
        $value = $this->get(self::IGNORE_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ignore_count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIgnoreCount()
    {
        return $this->get(self::IGNORE_COUNT) !== null;
    }

    /**
     * Sets value of 'forum_topic_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setForumTopicId($value)
    {
        return $this->set(self::FORUM_TOPIC_ID, $value);
    }

    /**
     * Returns value of 'forum_topic_id' property
     *
     * @return integer
     */
    public function getForumTopicId()
    {
        $value = $this->get(self::FORUM_TOPIC_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'forum_topic_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasForumTopicId()
    {
        return $this->get(self::FORUM_TOPIC_ID) !== null;
    }

    /**
     * Sets value of 'rtime32_last_modified' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtime32LastModified($value)
    {
        return $this->set(self::RTIME32_LAST_MODIFIED, $value);
    }

    /**
     * Returns value of 'rtime32_last_modified' property
     *
     * @return integer
     */
    public function getRtime32LastModified()
    {
        $value = $this->get(self::RTIME32_LAST_MODIFIED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime32_last_modified' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtime32LastModified()
    {
        return $this->get(self::RTIME32_LAST_MODIFIED) !== null;
    }

    /**
     * Sets value of 'news_post_gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewsPostGid($value)
    {
        return $this->set(self::NEWS_POST_GID, $value);
    }

    /**
     * Returns value of 'news_post_gid' property
     *
     * @return integer
     */
    public function getNewsPostGid()
    {
        $value = $this->get(self::NEWS_POST_GID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'news_post_gid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewsPostGid()
    {
        return $this->get(self::NEWS_POST_GID) !== null;
    }

    /**
     * Sets value of 'rtime_mod_reviewed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtimeModReviewed($value)
    {
        return $this->set(self::RTIME_MOD_REVIEWED, $value);
    }

    /**
     * Returns value of 'rtime_mod_reviewed' property
     *
     * @return integer
     */
    public function getRtimeModReviewed()
    {
        $value = $this->get(self::RTIME_MOD_REVIEWED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime_mod_reviewed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtimeModReviewed()
    {
        return $this->get(self::RTIME_MOD_REVIEWED) !== null;
    }

    /**
     * Sets value of 'featured_app_tagid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFeaturedAppTagid($value)
    {
        return $this->set(self::FEATURED_APP_TAGID, $value);
    }

    /**
     * Returns value of 'featured_app_tagid' property
     *
     * @return integer
     */
    public function getFeaturedAppTagid()
    {
        $value = $this->get(self::FEATURED_APP_TAGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'featured_app_tagid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeaturedAppTagid()
    {
        return $this->get(self::FEATURED_APP_TAGID) !== null;
    }

    /**
     * Appends value to 'referenced_appids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendReferencedAppids($value)
    {
        return $this->append(self::REFERENCED_APPIDS, $value);
    }

    /**
     * Clears 'referenced_appids' list
     *
     * @return null
     */
    public function clearReferencedAppids()
    {
        return $this->clear(self::REFERENCED_APPIDS);
    }

    /**
     * Returns 'referenced_appids' list
     *
     * @return integer[]
     */
    public function getReferencedAppids()
    {
        return $this->get(self::REFERENCED_APPIDS);
    }

    /**
     * Returns true if 'referenced_appids' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReferencedAppids()
    {
        return count($this->get(self::REFERENCED_APPIDS)) !== 0;
    }

    /**
     * Returns 'referenced_appids' iterator
     *
     * @return \ArrayIterator
     */
    public function getReferencedAppidsIterator()
    {
        return new \ArrayIterator($this->get(self::REFERENCED_APPIDS));
    }

    /**
     * Returns element from 'referenced_appids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getReferencedAppidsAt($offset)
    {
        return $this->get(self::REFERENCED_APPIDS, $offset);
    }

    /**
     * Returns count of 'referenced_appids' list
     *
     * @return int
     */
    public function getReferencedAppidsCount()
    {
        return $this->count(self::REFERENCED_APPIDS);
    }

    /**
     * Sets value of 'build_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuildId($value)
    {
        return $this->set(self::BUILD_ID, $value);
    }

    /**
     * Returns value of 'build_id' property
     *
     * @return integer
     */
    public function getBuildId()
    {
        $value = $this->get(self::BUILD_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'build_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuildId()
    {
        return $this->get(self::BUILD_ID) !== null;
    }

    /**
     * Sets value of 'build_branch' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBuildBranch($value)
    {
        return $this->set(self::BUILD_BRANCH, $value);
    }

    /**
     * Returns value of 'build_branch' property
     *
     * @return string
     */
    public function getBuildBranch()
    {
        $value = $this->get(self::BUILD_BRANCH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'build_branch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuildBranch()
    {
        return $this->get(self::BUILD_BRANCH) !== null;
    }
}
}