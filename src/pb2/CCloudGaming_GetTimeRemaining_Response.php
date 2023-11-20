<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CCloudGaming_GetTimeRemaining_Response message
 */
class CCloudGaming_GetTimeRemaining_Response extends \ProtobufMessage
{
    /* Field index constants */
    const ENTRIES = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTRIES => array(
            'name' => 'entries',
            'repeated' => true,
            'type' => CCloudGaming_TimeRemaining::class
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
        $this->values[self::ENTRIES] = array();
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
     * Appends value to 'entries' list
     *
     * @param CCloudGaming_TimeRemaining $value Value to append
     *
     * @return null
     */
    public function appendEntries(CCloudGaming_TimeRemaining $value)
    {
        return $this->append(self::ENTRIES, $value);
    }

    /**
     * Clears 'entries' list
     *
     * @return null
     */
    public function clearEntries()
    {
        return $this->clear(self::ENTRIES);
    }

    /**
     * Returns 'entries' list
     *
     * @return CCloudGaming_TimeRemaining[]
     */
    public function getEntries()
    {
        return $this->get(self::ENTRIES);
    }

    /**
     * Returns true if 'entries' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEntries()
    {
        return count($this->get(self::ENTRIES)) !== 0;
    }

    /**
     * Returns 'entries' iterator
     *
     * @return \ArrayIterator
     */
    public function getEntriesIterator()
    {
        return new \ArrayIterator($this->get(self::ENTRIES));
    }

    /**
     * Returns element from 'entries' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CCloudGaming_TimeRemaining
     */
    public function getEntriesAt($offset)
    {
        return $this->get(self::ENTRIES, $offset);
    }

    /**
     * Returns count of 'entries' list
     *
     * @return int
     */
    public function getEntriesCount()
    {
        return $this->count(self::ENTRIES);
    }
}
}