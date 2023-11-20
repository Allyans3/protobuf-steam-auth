<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_GetAuthSessionsForAccount_Response message
 */
class CAuthentication_GetAuthSessionsForAccount_Response extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_IDS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_IDS => array(
            'name' => 'client_ids',
            'repeated' => true,
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
        $this->values[self::CLIENT_IDS] = array();
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
     * Appends value to 'client_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendClientIds($value)
    {
        return $this->append(self::CLIENT_IDS, $value);
    }

    /**
     * Clears 'client_ids' list
     *
     * @return null
     */
    public function clearClientIds()
    {
        return $this->clear(self::CLIENT_IDS);
    }

    /**
     * Returns 'client_ids' list
     *
     * @return integer[]
     */
    public function getClientIds()
    {
        return $this->get(self::CLIENT_IDS);
    }

    /**
     * Returns true if 'client_ids' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientIds()
    {
        return count($this->get(self::CLIENT_IDS)) !== 0;
    }

    /**
     * Returns 'client_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getClientIdsIterator()
    {
        return new \ArrayIterator($this->get(self::CLIENT_IDS));
    }

    /**
     * Returns element from 'client_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getClientIdsAt($offset)
    {
        return $this->get(self::CLIENT_IDS, $offset);
    }

    /**
     * Returns count of 'client_ids' list
     *
     * @return int
     */
    public function getClientIdsCount()
    {
        return $this->count(self::CLIENT_IDS);
    }
}
}