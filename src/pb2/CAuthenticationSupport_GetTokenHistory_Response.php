<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthenticationSupport_GetTokenHistory_Response message
 */
class CAuthenticationSupport_GetTokenHistory_Response extends \ProtobufMessage
{
    /* Field index constants */
    const HISTORY = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HISTORY => array(
            'name' => 'history',
            'repeated' => true,
            'type' => CSupportRefreshTokenAudit::class
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
        $this->values[self::HISTORY] = array();
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
     * Appends value to 'history' list
     *
     * @param CSupportRefreshTokenAudit $value Value to append
     *
     * @return null
     */
    public function appendHistory(CSupportRefreshTokenAudit $value)
    {
        return $this->append(self::HISTORY, $value);
    }

    /**
     * Clears 'history' list
     *
     * @return null
     */
    public function clearHistory()
    {
        return $this->clear(self::HISTORY);
    }

    /**
     * Returns 'history' list
     *
     * @return CSupportRefreshTokenAudit[]
     */
    public function getHistory()
    {
        return $this->get(self::HISTORY);
    }

    /**
     * Returns true if 'history' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHistory()
    {
        return count($this->get(self::HISTORY)) !== 0;
    }

    /**
     * Returns 'history' iterator
     *
     * @return \ArrayIterator
     */
    public function getHistoryIterator()
    {
        return new \ArrayIterator($this->get(self::HISTORY));
    }

    /**
     * Returns element from 'history' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CSupportRefreshTokenAudit
     */
    public function getHistoryAt($offset)
    {
        return $this->get(self::HISTORY, $offset);
    }

    /**
     * Returns count of 'history' list
     *
     * @return int
     */
    public function getHistoryCount()
    {
        return $this->count(self::HISTORY);
    }
}
}