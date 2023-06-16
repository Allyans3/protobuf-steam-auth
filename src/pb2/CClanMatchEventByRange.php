<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CClanMatchEventByRange message
 */
class CClanMatchEventByRange extends \ProtobufMessage
{
    /* Field index constants */
    const RTIME_BEFORE = 1;
    const RTIME_AFTER = 2;
    const QUALIFIED = 3;
    const EVENTS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RTIME_BEFORE => array(
            'name' => 'rtime_before',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RTIME_AFTER => array(
            'name' => 'rtime_after',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::QUALIFIED => array(
            'name' => 'qualified',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENTS => array(
            'name' => 'events',
            'repeated' => true,
            'type' => CClanEventUserNewsTuple::class
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
        $this->values[self::RTIME_BEFORE] = null;
        $this->values[self::RTIME_AFTER] = null;
        $this->values[self::QUALIFIED] = null;
        $this->values[self::EVENTS] = array();
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
     * Sets value of 'rtime_before' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtimeBefore($value)
    {
        return $this->set(self::RTIME_BEFORE, $value);
    }

    /**
     * Returns value of 'rtime_before' property
     *
     * @return integer
     */
    public function getRtimeBefore()
    {
        $value = $this->get(self::RTIME_BEFORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime_before' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtimeBefore()
    {
        return $this->get(self::RTIME_BEFORE) !== null;
    }

    /**
     * Sets value of 'rtime_after' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtimeAfter($value)
    {
        return $this->set(self::RTIME_AFTER, $value);
    }

    /**
     * Returns value of 'rtime_after' property
     *
     * @return integer
     */
    public function getRtimeAfter()
    {
        $value = $this->get(self::RTIME_AFTER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime_after' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtimeAfter()
    {
        return $this->get(self::RTIME_AFTER) !== null;
    }

    /**
     * Sets value of 'qualified' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQualified($value)
    {
        return $this->set(self::QUALIFIED, $value);
    }

    /**
     * Returns value of 'qualified' property
     *
     * @return integer
     */
    public function getQualified()
    {
        $value = $this->get(self::QUALIFIED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'qualified' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQualified()
    {
        return $this->get(self::QUALIFIED) !== null;
    }

    /**
     * Appends value to 'events' list
     *
     * @param CClanEventUserNewsTuple $value Value to append
     *
     * @return null
     */
    public function appendEvents(CClanEventUserNewsTuple $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'events' list
     *
     * @return CClanEventUserNewsTuple[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns true if 'events' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEvents()
    {
        return count($this->get(self::EVENTS)) !== 0;
    }

    /**
     * Returns 'events' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CClanEventUserNewsTuple
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }
}
}