<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CCloudGaming_CreateNonce_Response message
 */
class CCloudGaming_CreateNonce_Response extends \ProtobufMessage
{
    /* Field index constants */
    const NONCE = 1;
    const EXPIRY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NONCE => array(
            'name' => 'nonce',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXPIRY => array(
            'name' => 'expiry',
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
        $this->values[self::NONCE] = null;
        $this->values[self::EXPIRY] = null;
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
     * Sets value of 'nonce' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNonce($value)
    {
        return $this->set(self::NONCE, $value);
    }

    /**
     * Returns value of 'nonce' property
     *
     * @return string
     */
    public function getNonce()
    {
        $value = $this->get(self::NONCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nonce' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNonce()
    {
        return $this->get(self::NONCE) !== null;
    }

    /**
     * Sets value of 'expiry' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpiry($value)
    {
        return $this->set(self::EXPIRY, $value);
    }

    /**
     * Returns value of 'expiry' property
     *
     * @return integer
     */
    public function getExpiry()
    {
        $value = $this->get(self::EXPIRY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'expiry' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpiry()
    {
        return $this->get(self::EXPIRY) !== null;
    }
}
}