<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CCloudGaming_TimeRemaining message
 */
class CCloudGaming_TimeRemaining extends \ProtobufMessage
{
    /* Field index constants */
    const APPID = 1;
    const MINUTES_REMAINING = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::APPID => array(
            'name' => 'appid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINUTES_REMAINING => array(
            'name' => 'minutes_remaining',
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
        $this->values[self::APPID] = null;
        $this->values[self::MINUTES_REMAINING] = null;
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
     * Sets value of 'minutes_remaining' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinutesRemaining($value)
    {
        return $this->set(self::MINUTES_REMAINING, $value);
    }

    /**
     * Returns value of 'minutes_remaining' property
     *
     * @return integer
     */
    public function getMinutesRemaining()
    {
        $value = $this->get(self::MINUTES_REMAINING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'minutes_remaining' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinutesRemaining()
    {
        return $this->get(self::MINUTES_REMAINING) !== null;
    }
}
}