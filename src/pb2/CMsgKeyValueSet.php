<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CMsgKeyValueSet message
 */
class CMsgKeyValueSet extends \ProtobufMessage
{
    /* Field index constants */
    const PAIRS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PAIRS => array(
            'name' => 'pairs',
            'repeated' => true,
            'type' => CMsgKeyValuePair::class
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
        $this->values[self::PAIRS] = array();
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
     * Appends value to 'pairs' list
     *
     * @param CMsgKeyValuePair $value Value to append
     *
     * @return null
     */
    public function appendPairs(CMsgKeyValuePair $value)
    {
        return $this->append(self::PAIRS, $value);
    }

    /**
     * Clears 'pairs' list
     *
     * @return null
     */
    public function clearPairs()
    {
        return $this->clear(self::PAIRS);
    }

    /**
     * Returns 'pairs' list
     *
     * @return CMsgKeyValuePair[]
     */
    public function getPairs()
    {
        return $this->get(self::PAIRS);
    }

    /**
     * Returns true if 'pairs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPairs()
    {
        return count($this->get(self::PAIRS)) !== 0;
    }

    /**
     * Returns 'pairs' iterator
     *
     * @return \ArrayIterator
     */
    public function getPairsIterator()
    {
        return new \ArrayIterator($this->get(self::PAIRS));
    }

    /**
     * Returns element from 'pairs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CMsgKeyValuePair
     */
    public function getPairsAt($offset)
    {
        return $this->get(self::PAIRS, $offset);
    }

    /**
     * Returns count of 'pairs' list
     *
     * @return int
     */
    public function getPairsCount()
    {
        return $this->count(self::PAIRS);
    }
}
}