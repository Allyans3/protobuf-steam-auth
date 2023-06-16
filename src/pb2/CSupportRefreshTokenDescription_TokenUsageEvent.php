<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * TokenUsageEvent message embedded in CSupportRefreshTokenDescription message
 */
class CSupportRefreshTokenDescription_TokenUsageEvent extends \ProtobufMessage
{
    /* Field index constants */
    const TIME = 1;
    const IP = 2;
    const COUNTRY = 3;
    const STATE = 4;
    const CITY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::COUNTRY => array(
            'name' => 'country',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'city',
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
        $this->values[self::TIME] = null;
        $this->values[self::IP] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::STATE] = null;
        $this->values[self::CITY] = null;
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
     * Sets value of 'country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'country' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountry()
    {
        return $this->get(self::COUNTRY) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return string
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'city' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCity()
    {
        return $this->get(self::CITY) !== null;
    }
}
}