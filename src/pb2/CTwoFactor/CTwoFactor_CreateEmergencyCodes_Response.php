<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_CreateEmergencyCodes_Response message
 */
class CTwoFactor_CreateEmergencyCodes_Response extends \ProtobufMessage
{
    /* Field index constants */
    const CODES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODES => array(
            'name' => 'codes',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::CODES] = array();
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
     * Appends value to 'codes' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCodes($value)
    {
        return $this->append(self::CODES, $value);
    }

    /**
     * Clears 'codes' list
     *
     * @return null
     */
    public function clearCodes()
    {
        return $this->clear(self::CODES);
    }

    /**
     * Returns 'codes' list
     *
     * @return string[]
     */
    public function getCodes()
    {
        return $this->get(self::CODES);
    }

    /**
     * Returns true if 'codes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCodes()
    {
        return count($this->get(self::CODES)) !== 0;
    }

    /**
     * Returns 'codes' iterator
     *
     * @return \ArrayIterator
     */
    public function getCodesIterator()
    {
        return new \ArrayIterator($this->get(self::CODES));
    }

    /**
     * Returns element from 'codes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getCodesAt($offset)
    {
        return $this->get(self::CODES, $offset);
    }

    /**
     * Returns count of 'codes' list
     *
     * @return int
     */
    public function getCodesCount()
    {
        return $this->count(self::CODES);
    }
}
}