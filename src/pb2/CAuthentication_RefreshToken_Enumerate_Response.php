<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_RefreshToken_Enumerate_Response message
 */
class CAuthentication_RefreshToken_Enumerate_Response extends \ProtobufMessage
{
    /* Field index constants */
    const REFRESH_TOKENS = 1;
    const REQUESTING_TOKEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REFRESH_TOKENS => array(
            'name' => 'refresh_tokens',
            'repeated' => true,
            'type' => CAuthentication_RefreshToken_Enumerate_Response_RefreshTokenDescription::class
        ),
        self::REQUESTING_TOKEN => array(
            'name' => 'requesting_token',
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
        $this->values[self::REFRESH_TOKENS] = array();
        $this->values[self::REQUESTING_TOKEN] = null;
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
     * Appends value to 'refresh_tokens' list
     *
     * @param CAuthentication_RefreshToken_Enumerate_Response_RefreshTokenDescription $value Value to append
     *
     * @return null
     */
    public function appendRefreshTokens(CAuthentication_RefreshToken_Enumerate_Response_RefreshTokenDescription $value)
    {
        return $this->append(self::REFRESH_TOKENS, $value);
    }

    /**
     * Clears 'refresh_tokens' list
     *
     * @return null
     */
    public function clearRefreshTokens()
    {
        return $this->clear(self::REFRESH_TOKENS);
    }

    /**
     * Returns 'refresh_tokens' list
     *
     * @return CAuthentication_RefreshToken_Enumerate_Response_RefreshTokenDescription[]
     */
    public function getRefreshTokens()
    {
        return $this->get(self::REFRESH_TOKENS);
    }

    /**
     * Returns true if 'refresh_tokens' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRefreshTokens()
    {
        return count($this->get(self::REFRESH_TOKENS)) !== 0;
    }

    /**
     * Returns 'refresh_tokens' iterator
     *
     * @return \ArrayIterator
     */
    public function getRefreshTokensIterator()
    {
        return new \ArrayIterator($this->get(self::REFRESH_TOKENS));
    }

    /**
     * Returns element from 'refresh_tokens' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CAuthentication_RefreshToken_Enumerate_Response_RefreshTokenDescription
     */
    public function getRefreshTokensAt($offset)
    {
        return $this->get(self::REFRESH_TOKENS, $offset);
    }

    /**
     * Returns count of 'refresh_tokens' list
     *
     * @return int
     */
    public function getRefreshTokensCount()
    {
        return $this->count(self::REFRESH_TOKENS);
    }

    /**
     * Sets value of 'requesting_token' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestingToken($value)
    {
        return $this->set(self::REQUESTING_TOKEN, $value);
    }

    /**
     * Returns value of 'requesting_token' property
     *
     * @return integer
     */
    public function getRequestingToken()
    {
        $value = $this->get(self::REQUESTING_TOKEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'requesting_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestingToken()
    {
        return $this->get(self::REQUESTING_TOKEN) !== null;
    }
}
}