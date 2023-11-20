<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_Time_Request message
 */
class CTwoFactor_Time_Request extends \ProtobufMessage
{
    /* Field index constants */
    const SENDER_TIME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDER_TIME => array(
            'name' => 'sender_time',
            'required' => false,
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
        $this->values[self::SENDER_TIME] = null;
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
     * Sets value of 'sender_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSenderTime($value)
    {
        return $this->set(self::SENDER_TIME, $value);
    }

    /**
     * Returns value of 'sender_time' property
     *
     * @return integer
     */
    public function getSenderTime()
    {
        $value = $this->get(self::SENDER_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sender_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSenderTime()
    {
        return $this->get(self::SENDER_TIME) !== null;
    }
}
}