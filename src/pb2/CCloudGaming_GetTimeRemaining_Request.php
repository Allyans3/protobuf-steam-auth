<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CCloudGaming_GetTimeRemaining_Request message
 */
class CCloudGaming_GetTimeRemaining_Request extends \ProtobufMessage
{
    /* Field index constants */
    const PLATFORM = 1;
    const APPID_LIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PLATFORM => array(
            'name' => 'platform',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APPID_LIST => array(
            'name' => 'appid_list',
            'repeated' => true,
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
        $this->values[self::APPID_LIST] = array();
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
     * Appends value to 'appid_list' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendAppidList($value)
    {
        return $this->append(self::APPID_LIST, $value);
    }

    /**
     * Clears 'appid_list' list
     *
     * @return null
     */
    public function clearAppidList()
    {
        return $this->clear(self::APPID_LIST);
    }

    /**
     * Returns 'appid_list' list
     *
     * @return integer[]
     */
    public function getAppidList()
    {
        return $this->get(self::APPID_LIST);
    }

    /**
     * Returns true if 'appid_list' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppidList()
    {
        return count($this->get(self::APPID_LIST)) !== 0;
    }

    /**
     * Returns 'appid_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getAppidListIterator()
    {
        return new \ArrayIterator($this->get(self::APPID_LIST));
    }

    /**
     * Returns element from 'appid_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getAppidListAt($offset)
    {
        return $this->get(self::APPID_LIST, $offset);
    }

    /**
     * Returns count of 'appid_list' list
     *
     * @return int
     */
    public function getAppidListCount()
    {
        return $this->count(self::APPID_LIST);
    }
}
}