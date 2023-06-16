<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthenticationSupport_QueryRefreshTokenByID_Response message
 */
class CAuthenticationSupport_QueryRefreshTokenByID_Response extends \ProtobufMessage
{
    /* Field index constants */
    const REFRESH_TOKENS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REFRESH_TOKENS => array(
            'name' => 'refresh_tokens',
            'repeated' => true,
            'type' => CSupportRefreshTokenDescription::class
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
     * @param CSupportRefreshTokenDescription $value Value to append
     *
     * @return null
     */
    public function appendRefreshTokens(CSupportRefreshTokenDescription $value)
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
     * @return CSupportRefreshTokenDescription[]
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
     * @return CSupportRefreshTokenDescription
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
}
}