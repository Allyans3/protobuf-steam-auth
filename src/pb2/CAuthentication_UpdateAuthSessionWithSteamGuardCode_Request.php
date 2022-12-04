<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_UpdateAuthSessionWithSteamGuardCode_Request message
 */
class CAuthentication_UpdateAuthSessionWithSteamGuardCode_Request extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_ID = 1;
    const STEAMID = 2;
    const CODE = 3;
    const CODE_TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CODE_TYPE => array(
            'default' => EAuthSessionGuardType::k_EAuthSessionGuardType_Unknown,
            'name' => 'code_type',
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
        $this->values[self::CLIENT_ID] = null;
        $this->values[self::STEAMID] = null;
        $this->values[self::CODE] = null;
        $this->values[self::CODE_TYPE] = self::$fields[self::CODE_TYPE]['default'];
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
     * Sets value of 'code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return string
     */
    public function getCode()
    {
        $value = $this->get(self::CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCode()
    {
        return $this->get(self::CODE) !== null;
    }

    /**
     * Sets value of 'code_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCodeType($value)
    {
        return $this->set(self::CODE_TYPE, $value);
    }

    /**
     * Returns value of 'code_type' property
     *
     * @return integer
     */
    public function getCodeType()
    {
        $value = $this->get(self::CODE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'code_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCodeType()
    {
        return $this->get(self::CODE_TYPE) !== null;
    }
}
}