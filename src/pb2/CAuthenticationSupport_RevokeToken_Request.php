<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthenticationSupport_RevokeToken_Request message
 */
class CAuthenticationSupport_RevokeToken_Request extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN_ID = 1;
    const STEAMID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN_ID => array(
            'name' => 'token_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::STEAMID => array(
            'name' => 'steamid',
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
        $this->values[self::TOKEN_ID] = null;
        $this->values[self::STEAMID] = null;
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
     * Sets value of 'token_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenId($value)
    {
        return $this->set(self::TOKEN_ID, $value);
    }

    /**
     * Returns value of 'token_id' property
     *
     * @return integer
     */
    public function getTokenId()
    {
        $value = $this->get(self::TOKEN_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenId()
    {
        return $this->get(self::TOKEN_ID) !== null;
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
}
}