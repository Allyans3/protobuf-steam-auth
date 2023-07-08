<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_VerifyAccountPhoneWithCode_Request message
 */
class CPhone_VerifyAccountPhoneWithCode_Request extends \ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
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
        $this->values[self::CODE] = null;
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
     * Sets value of 'code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return string
     */
    public function getCode()
    {
        $value = $this->get(self::CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCode()
    {
        return $this->get(self::CODE) !== null;
    }
}
}