<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CSupportRefreshTokenAudit message
 */
class CSupportRefreshTokenAudit extends \ProtobufMessage
{
    /* Field index constants */
    const ACTION = 1;
    const TIME = 2;
    const IP = 3;
    const ACTOR = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTION => array(
            'name' => 'action',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IP => array(
            'name' => 'ip',
            'required' => false,
            'type' => CMsgIPAddress::class
        ),
        self::ACTOR => array(
            'name' => 'actor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
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
        $this->values[self::ACTION] = null;
        $this->values[self::TIME] = null;
        $this->values[self::IP] = null;
        $this->values[self::ACTOR] = null;
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
     * Sets value of 'action' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAction($value)
    {
        return $this->set(self::ACTION, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return integer
     */
    public function getAction()
    {
        $value = $this->get(self::ACTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'action' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAction()
    {
        return $this->get(self::ACTION) !== null;
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTime()
    {
        return $this->get(self::TIME) !== null;
    }

    /**
     * Sets value of 'ip' property
     *
     * @param CMsgIPAddress $value Property value
     *
     * @return null
     */
    public function setIp(CMsgIPAddress $value=null)
    {
        return $this->set(self::IP, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return CMsgIPAddress
     */
    public function getIp()
    {
        return $this->get(self::IP);
    }

    /**
     * Returns true if 'ip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIp()
    {
        return $this->get(self::IP) !== null;
    }

    /**
     * Sets value of 'actor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActor($value)
    {
        return $this->set(self::ACTOR, $value);
    }

    /**
     * Returns value of 'actor' property
     *
     * @return integer
     */
    public function getActor()
    {
        $value = $this->get(self::ACTOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActor()
    {
        return $this->get(self::ACTOR) !== null;
    }
}
}