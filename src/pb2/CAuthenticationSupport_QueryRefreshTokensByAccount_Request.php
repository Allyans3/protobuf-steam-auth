<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthenticationSupport_QueryRefreshTokensByAccount_Request message
 */
class CAuthenticationSupport_QueryRefreshTokensByAccount_Request extends \ProtobufMessage
{
    /* Field index constants */
    const STEAMID = 1;
    const INCLUDE_REVOKED_TOKENS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::INCLUDE_REVOKED_TOKENS => array(
            'name' => 'include_revoked_tokens',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::STEAMID] = null;
        $this->values[self::INCLUDE_REVOKED_TOKENS] = null;
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
     * Sets value of 'include_revoked_tokens' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIncludeRevokedTokens($value)
    {
        return $this->set(self::INCLUDE_REVOKED_TOKENS, $value);
    }

    /**
     * Returns value of 'include_revoked_tokens' property
     *
     * @return boolean
     */
    public function getIncludeRevokedTokens()
    {
        $value = $this->get(self::INCLUDE_REVOKED_TOKENS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'include_revoked_tokens' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIncludeRevokedTokens()
    {
        return $this->get(self::INCLUDE_REVOKED_TOKENS) !== null;
    }
}
}