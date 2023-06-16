<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CMsgIPAddressBucket message
 */
class CMsgIPAddressBucket extends \ProtobufMessage
{
    /* Field index constants */
    const ORIGINAL_IP_ADDRESS = 1;
    const BUCKET = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORIGINAL_IP_ADDRESS => array(
            'name' => 'original_ip_address',
            'required' => false,
            'type' => CMsgIPAddress::class
        ),
        self::BUCKET => array(
            'name' => 'bucket',
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
        $this->values[self::ORIGINAL_IP_ADDRESS] = null;
        $this->values[self::BUCKET] = null;
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
     * Sets value of 'original_ip_address' property
     *
     * @param CMsgIPAddress $value Property value
     *
     * @return null
     */
    public function setOriginalIpAddress(CMsgIPAddress $value=null)
    {
        return $this->set(self::ORIGINAL_IP_ADDRESS, $value);
    }

    /**
     * Returns value of 'original_ip_address' property
     *
     * @return CMsgIPAddress
     */
    public function getOriginalIpAddress()
    {
        return $this->get(self::ORIGINAL_IP_ADDRESS);
    }

    /**
     * Returns true if 'original_ip_address' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOriginalIpAddress()
    {
        return $this->get(self::ORIGINAL_IP_ADDRESS) !== null;
    }

    /**
     * Sets value of 'bucket' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBucket($value)
    {
        return $this->set(self::BUCKET, $value);
    }

    /**
     * Returns value of 'bucket' property
     *
     * @return integer
     */
    public function getBucket()
    {
        $value = $this->get(self::BUCKET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bucket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBucket()
    {
        return $this->get(self::BUCKET) !== null;
    }
}
}