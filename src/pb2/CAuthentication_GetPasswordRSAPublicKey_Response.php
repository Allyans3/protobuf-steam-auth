<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_GetPasswordRSAPublicKey_Response message
 */
class CAuthentication_GetPasswordRSAPublicKey_Response extends \ProtobufMessage
{
    /* Field index constants */
    const PUBLICKEY_MOD = 1;
    const PUBLICKEY_EXP = 2;
    const TIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PUBLICKEY_MOD => array(
            'name' => 'publickey_mod',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PUBLICKEY_EXP => array(
            'name' => 'publickey_exp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
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
        $this->values[self::PUBLICKEY_MOD] = null;
        $this->values[self::PUBLICKEY_EXP] = null;
        $this->values[self::TIMESTAMP] = null;
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
     * Sets value of 'publickey_mod' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPublickeyMod($value)
    {
        return $this->set(self::PUBLICKEY_MOD, $value);
    }

    /**
     * Returns value of 'publickey_mod' property
     *
     * @return string
     */
    public function getPublickeyMod()
    {
        $value = $this->get(self::PUBLICKEY_MOD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'publickey_mod' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublickeyMod()
    {
        return $this->get(self::PUBLICKEY_MOD) !== null;
    }

    /**
     * Sets value of 'publickey_exp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPublickeyExp($value)
    {
        return $this->set(self::PUBLICKEY_EXP, $value);
    }

    /**
     * Returns value of 'publickey_exp' property
     *
     * @return string
     */
    public function getPublickeyExp()
    {
        $value = $this->get(self::PUBLICKEY_EXP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'publickey_exp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublickeyExp()
    {
        return $this->get(self::PUBLICKEY_EXP) !== null;
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
    }
}
}