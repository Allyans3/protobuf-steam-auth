<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CMsgIPAddress message
 */
class CMsgIPAddress extends \ProtobufMessage
{
    /* Field index constants */
    const V4 = 1;
    const V6 = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::V4 => array(
            'name' => 'v4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT
        ),
        self::V6 => array(
            'name' => 'v6',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING
        )
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
        $this->values[self::V4] = null;
        $this->values[self::V6] = null;
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
     * Sets value of 'v4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setV4($value)
    {
        return $this->set(self::V4, $value);
    }

    /**
     * Returns value of 'v4' property
     *
     * @return integer
     */
    public function getV4()
    {
        $value = $this->get(self::V4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'v6' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setV6($value)
    {
        return $this->set(self::V6, $value);
    }

    /**
     * Returns value of 'v6' property
     *
     * @return string
     */
    public function getV6()
    {
        $value = $this->get(self::V6);
        return $value === null ? (string)$value : $value;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return 'ip';
    }
}
}