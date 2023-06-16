<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_UpdateAuthSessionWithMobileConfirmation_Request message
 */
class CAuthentication_UpdateAuthSessionWithMobileConfirmation_Request extends \ProtobufMessage
{
    /* Field index constants */
    const VERSION = 1;
    const CLIENT_ID = 2;
    const STEAMID = 3;
    const SIGNATURE = 4;
    const CONFIRM = 5;
    const PERSISTENCE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VERSION => array(
            'name' => 'version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENT_ID => array(
            'name' => 'client_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONFIRM => array(
            'default' => false,
            'name' => 'confirm',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PERSISTENCE => array(
            'default' => ESessionPersistence::k_ESessionPersistence_Persistent,
            'name' => 'persistence',
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
        $this->values[self::VERSION] = null;
        $this->values[self::CLIENT_ID] = null;
        $this->values[self::STEAMID] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::CONFIRM] = self::$fields[self::CONFIRM]['default'];
        $this->values[self::PERSISTENCE] = self::$fields[self::PERSISTENCE]['default'];
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
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->get(self::VERSION) !== null;
    }

    /**
     * Sets value of 'client_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENT_ID, $value);
    }

    /**
     * Returns value of 'client_id' property
     *
     * @return integer
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENT_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'client_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENT_ID) !== null;
    }

    /**
     * Sets value of 'steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSteamid($value)
    {
        return $this->set(self::STEAMID, $value);
    }

    /**
     * Returns value of 'steamid' property
     *
     * @return integer
     */
    public function getSteamid()
    {
        $value = $this->get(self::STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSteamid()
    {
        return $this->get(self::STEAMID) !== null;
    }

    /**
     * Sets value of 'signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'confirm' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setConfirm($value)
    {
        return $this->set(self::CONFIRM, $value);
    }

    /**
     * Returns value of 'confirm' property
     *
     * @return boolean
     */
    public function getConfirm()
    {
        $value = $this->get(self::CONFIRM);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'confirm' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfirm()
    {
        return $this->get(self::CONFIRM) !== null;
    }

    /**
     * Sets value of 'persistence' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPersistence($value)
    {
        return $this->set(self::PERSISTENCE, $value);
    }

    /**
     * Returns value of 'persistence' property
     *
     * @return integer
     */
    public function getPersistence()
    {
        $value = $this->get(self::PERSISTENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'persistence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPersistence()
    {
        return $this->get(self::PERSISTENCE) !== null;
    }
}
}