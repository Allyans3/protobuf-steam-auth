<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CCloudGaming_CreateNonce_Request message
 */
class CCloudGaming_CreateNonce_Request extends \ProtobufMessage
{
    /* Field index constants */
    const PLATFORM = 1;
    const APPID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PLATFORM => array(
            'name' => 'platform',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APPID => array(
            'name' => 'appid',
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
        $this->values[self::PLATFORM] = null;
        $this->values[self::APPID] = null;
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
     * Sets value of 'platform' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPlatform($value)
    {
        return $this->set(self::PLATFORM, $value);
    }

    /**
     * Returns value of 'platform' property
     *
     * @return string
     */
    public function getPlatform()
    {
        $value = $this->get(self::PLATFORM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'platform' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatform()
    {
        return $this->get(self::PLATFORM) !== null;
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
}
}