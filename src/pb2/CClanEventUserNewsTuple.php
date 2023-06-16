<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CClanEventUserNewsTuple message
 */
class CClanEventUserNewsTuple extends \ProtobufMessage
{
    /* Field index constants */
    const CLANID = 1;
    const EVENT_GID = 2;
    const ANNOUNCEMENT_GID = 3;
    const RTIME_START = 4;
    const RTIME_END = 5;
    const PRIORITY_SCORE = 6;
    const TYPE = 7;
    const CLAMP_RANGE_SLOT = 8;
    const APPID = 9;
    const RTIME32_LAST_MODIFIED = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLANID => array(
            'name' => 'clanid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENT_GID => array(
            'name' => 'event_gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::ANNOUNCEMENT_GID => array(
            'name' => 'announcement_gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::RTIME_START => array(
            'name' => 'rtime_start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RTIME_END => array(
            'name' => 'rtime_end',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIORITY_SCORE => array(
            'name' => 'priority_score',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLAMP_RANGE_SLOT => array(
            'name' => 'clamp_range_slot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::APPID => array(
            'name' => 'appid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RTIME32_LAST_MODIFIED => array(
            'name' => 'rtime32_last_modified',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::CLANID] = null;
        $this->values[self::EVENT_GID] = null;
        $this->values[self::ANNOUNCEMENT_GID] = null;
        $this->values[self::RTIME_START] = null;
        $this->values[self::RTIME_END] = null;
        $this->values[self::PRIORITY_SCORE] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::CLAMP_RANGE_SLOT] = null;
        $this->values[self::APPID] = null;
        $this->values[self::RTIME32_LAST_MODIFIED] = null;
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
     * Sets value of 'announcement_gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnnouncementGid($value)
    {
        return $this->set(self::ANNOUNCEMENT_GID, $value);
    }

    /**
     * Returns value of 'announcement_gid' property
     *
     * @return integer
     */
    public function getAnnouncementGid()
    {
        $value = $this->get(self::ANNOUNCEMENT_GID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'announcement_gid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnnouncementGid()
    {
        return $this->get(self::ANNOUNCEMENT_GID) !== null;
    }

    /**
     * Sets value of 'rtime_start' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtimeStart($value)
    {
        return $this->set(self::RTIME_START, $value);
    }

    /**
     * Returns value of 'rtime_start' property
     *
     * @return integer
     */
    public function getRtimeStart()
    {
        $value = $this->get(self::RTIME_START);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime_start' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtimeStart()
    {
        return $this->get(self::RTIME_START) !== null;
    }

    /**
     * Sets value of 'rtime_end' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtimeEnd($value)
    {
        return $this->set(self::RTIME_END, $value);
    }

    /**
     * Returns value of 'rtime_end' property
     *
     * @return integer
     */
    public function getRtimeEnd()
    {
        $value = $this->get(self::RTIME_END);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime_end' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtimeEnd()
    {
        return $this->get(self::RTIME_END) !== null;
    }

    /**
     * Sets value of 'priority_score' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPriorityScore($value)
    {
        return $this->set(self::PRIORITY_SCORE, $value);
    }

    /**
     * Returns value of 'priority_score' property
     *
     * @return integer
     */
    public function getPriorityScore()
    {
        $value = $this->get(self::PRIORITY_SCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'priority_score' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPriorityScore()
    {
        return $this->get(self::PRIORITY_SCORE) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'clamp_range_slot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClampRangeSlot($value)
    {
        return $this->set(self::CLAMP_RANGE_SLOT, $value);
    }

    /**
     * Returns value of 'clamp_range_slot' property
     *
     * @return integer
     */
    public function getClampRangeSlot()
    {
        $value = $this->get(self::CLAMP_RANGE_SLOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clamp_range_slot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClampRangeSlot()
    {
        return $this->get(self::CLAMP_RANGE_SLOT) !== null;
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
}
}