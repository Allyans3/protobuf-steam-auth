<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CCommunity_ClanAnnouncementInfo message
 */
class CCommunity_ClanAnnouncementInfo extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const CLANID = 2;
    const POSTERID = 3;
    const HEADLINE = 4;
    const POSTTIME = 5;
    const UPDATETIME = 6;
    const BODY = 7;
    const COMMENTCOUNT = 8;
    const TAGS = 9;
    const LANGUAGE = 10;
    const HIDDEN = 11;
    const FORUM_TOPIC_ID = 12;
    const EVENT_GID = 13;
    const VOTEUPCOUNT = 14;
    const VOTEDOWNCOUNT = 15;
    const BAN_CHECK_RESULT = 16;
    const BANNED = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLANID => array(
            'name' => 'clanid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTERID => array(
            'name' => 'posterid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEADLINE => array(
            'name' => 'headline',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::POSTTIME => array(
            'name' => 'posttime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATETIME => array(
            'name' => 'updatetime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BODY => array(
            'name' => 'body',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMMENTCOUNT => array(
            'name' => 'commentcount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGS => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LANGUAGE => array(
            'name' => 'language',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HIDDEN => array(
            'name' => 'hidden',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FORUM_TOPIC_ID => array(
            'name' => 'forum_topic_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::EVENT_GID => array(
            'name' => 'event_gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::VOTEUPCOUNT => array(
            'name' => 'voteupcount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VOTEDOWNCOUNT => array(
            'name' => 'votedowncount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAN_CHECK_RESULT => array(
            'default' => EBanContentCheckResult::k_EBanContentCheckResult_NotScanned,
            'name' => 'ban_check_result',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BANNED => array(
            'name' => 'banned',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::CLANID] = null;
        $this->values[self::POSTERID] = null;
        $this->values[self::HEADLINE] = null;
        $this->values[self::POSTTIME] = null;
        $this->values[self::UPDATETIME] = null;
        $this->values[self::BODY] = null;
        $this->values[self::COMMENTCOUNT] = null;
        $this->values[self::TAGS] = array();
        $this->values[self::LANGUAGE] = null;
        $this->values[self::HIDDEN] = null;
        $this->values[self::FORUM_TOPIC_ID] = null;
        $this->values[self::EVENT_GID] = null;
        $this->values[self::VOTEUPCOUNT] = null;
        $this->values[self::VOTEDOWNCOUNT] = null;
        $this->values[self::BAN_CHECK_RESULT] = self::$fields[self::BAN_CHECK_RESULT]['default'];
        $this->values[self::BANNED] = null;
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
     * Sets value of 'clanid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClanid($value)
    {
        return $this->set(self::CLANID, $value);
    }

    /**
     * Returns value of 'clanid' property
     *
     * @return integer
     */
    public function getClanid()
    {
        $value = $this->get(self::CLANID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clanid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClanid()
    {
        return $this->get(self::CLANID) !== null;
    }

    /**
     * Sets value of 'posterid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPosterid($value)
    {
        return $this->set(self::POSTERID, $value);
    }

    /**
     * Returns value of 'posterid' property
     *
     * @return integer
     */
    public function getPosterid()
    {
        $value = $this->get(self::POSTERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'posterid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPosterid()
    {
        return $this->get(self::POSTERID) !== null;
    }

    /**
     * Sets value of 'headline' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeadline($value)
    {
        return $this->set(self::HEADLINE, $value);
    }

    /**
     * Returns value of 'headline' property
     *
     * @return string
     */
    public function getHeadline()
    {
        $value = $this->get(self::HEADLINE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'headline' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadline()
    {
        return $this->get(self::HEADLINE) !== null;
    }

    /**
     * Sets value of 'posttime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPosttime($value)
    {
        return $this->set(self::POSTTIME, $value);
    }

    /**
     * Returns value of 'posttime' property
     *
     * @return integer
     */
    public function getPosttime()
    {
        $value = $this->get(self::POSTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'posttime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPosttime()
    {
        return $this->get(self::POSTTIME) !== null;
    }

    /**
     * Sets value of 'updatetime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdatetime($value)
    {
        return $this->set(self::UPDATETIME, $value);
    }

    /**
     * Returns value of 'updatetime' property
     *
     * @return integer
     */
    public function getUpdatetime()
    {
        $value = $this->get(self::UPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updatetime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdatetime()
    {
        return $this->get(self::UPDATETIME) !== null;
    }

    /**
     * Sets value of 'body' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBody($value)
    {
        return $this->set(self::BODY, $value);
    }

    /**
     * Returns value of 'body' property
     *
     * @return string
     */
    public function getBody()
    {
        $value = $this->get(self::BODY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'body' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBody()
    {
        return $this->get(self::BODY) !== null;
    }

    /**
     * Sets value of 'commentcount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommentcount($value)
    {
        return $this->set(self::COMMENTCOUNT, $value);
    }

    /**
     * Returns value of 'commentcount' property
     *
     * @return integer
     */
    public function getCommentcount()
    {
        $value = $this->get(self::COMMENTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commentcount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentcount()
    {
        return $this->get(self::COMMENTCOUNT) !== null;
    }

    /**
     * Appends value to 'tags' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTags($value)
    {
        return $this->append(self::TAGS, $value);
    }

    /**
     * Clears 'tags' list
     *
     * @return null
     */
    public function clearTags()
    {
        return $this->clear(self::TAGS);
    }

    /**
     * Returns 'tags' list
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->get(self::TAGS);
    }

    /**
     * Returns true if 'tags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTags()
    {
        return count($this->get(self::TAGS)) !== 0;
    }

    /**
     * Returns 'tags' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagsIterator()
    {
        return new \ArrayIterator($this->get(self::TAGS));
    }

    /**
     * Returns element from 'tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTagsAt($offset)
    {
        return $this->get(self::TAGS, $offset);
    }

    /**
     * Returns count of 'tags' list
     *
     * @return int
     */
    public function getTagsCount()
    {
        return $this->count(self::TAGS);
    }

    /**
     * Sets value of 'language' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'language' property
     *
     * @return integer
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
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
     * Sets value of 'event_gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventGid($value)
    {
        return $this->set(self::EVENT_GID, $value);
    }

    /**
     * Returns value of 'event_gid' property
     *
     * @return integer
     */
    public function getEventGid()
    {
        $value = $this->get(self::EVENT_GID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'event_gid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventGid()
    {
        return $this->get(self::EVENT_GID) !== null;
    }

    /**
     * Sets value of 'voteupcount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoteupcount($value)
    {
        return $this->set(self::VOTEUPCOUNT, $value);
    }

    /**
     * Returns value of 'voteupcount' property
     *
     * @return integer
     */
    public function getVoteupcount()
    {
        $value = $this->get(self::VOTEUPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voteupcount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoteupcount()
    {
        return $this->get(self::VOTEUPCOUNT) !== null;
    }

    /**
     * Sets value of 'votedowncount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVotedowncount($value)
    {
        return $this->set(self::VOTEDOWNCOUNT, $value);
    }

    /**
     * Returns value of 'votedowncount' property
     *
     * @return integer
     */
    public function getVotedowncount()
    {
        $value = $this->get(self::VOTEDOWNCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'votedowncount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVotedowncount()
    {
        return $this->get(self::VOTEDOWNCOUNT) !== null;
    }

    /**
     * Sets value of 'ban_check_result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBanCheckResult($value)
    {
        return $this->set(self::BAN_CHECK_RESULT, $value);
    }

    /**
     * Returns value of 'ban_check_result' property
     *
     * @return integer
     */
    public function getBanCheckResult()
    {
        $value = $this->get(self::BAN_CHECK_RESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ban_check_result' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanCheckResult()
    {
        return $this->get(self::BAN_CHECK_RESULT) !== null;
    }

    /**
     * Sets value of 'banned' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBanned($value)
    {
        return $this->set(self::BANNED, $value);
    }

    /**
     * Returns value of 'banned' property
     *
     * @return boolean
     */
    public function getBanned()
    {
        $value = $this->get(self::BANNED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'banned' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanned()
    {
        return $this->get(self::BANNED) !== null;
    }
}
}