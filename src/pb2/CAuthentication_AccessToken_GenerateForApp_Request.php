<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_AccessToken_GenerateForApp_Request message
 */
class CAuthentication_AccessToken_GenerateForApp_Request extends \ProtobufMessage
{
    /* Field index constants */
    const REFRESH_TOKEN = 1;
    const STEAMID = 2;
    const RENEWAL_TYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REFRESH_TOKEN => array(
            'name' => 'refresh_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::RENEWAL_TYPE => array(
            'default' => ETokenRenewalType::k_ETokenRenewalType_None,
            'name' => 'renewal_type',
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
        $this->values[self::REFRESH_TOKEN] = null;
        $this->values[self::STEAMID] = null;
        $this->values[self::RENEWAL_TYPE] = self::$fields[self::RENEWAL_TYPE]['default'];
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
     * Sets value of 'refresh_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRefreshToken($value)
    {
        return $this->set(self::REFRESH_TOKEN, $value);
    }

    /**
     * Returns value of 'refresh_token' property
     *
     * @return string
     */
    public function getRefreshToken()
    {
        $value = $this->get(self::REFRESH_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'refresh_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRefreshToken()
    {
        return $this->get(self::REFRESH_TOKEN) !== null;
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
     * Sets value of 'renewal_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRenewalType($value)
    {
        return $this->set(self::RENEWAL_TYPE, $value);
    }

    /**
     * Returns value of 'renewal_type' property
     *
     * @return integer
     */
    public function getRenewalType()
    {
        $value = $this->get(self::RENEWAL_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'renewal_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRenewalType()
    {
        return $this->get(self::RENEWAL_TYPE) !== null;
    }
}
}