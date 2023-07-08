<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_SetAccountPhoneNumber_Request message
 */
class CPhone_SetAccountPhoneNumber_Request extends \ProtobufMessage
{
    /* Field index constants */
    const PHONE_NUMBER = 1;
    const PHONE_COUNTRY_CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONE_NUMBER => array(
            'name' => 'phone_number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHONE_COUNTRY_CODE => array(
            'name' => 'phone_country_code',
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
        $this->values[self::PHONE_NUMBER] = null;
        $this->values[self::PHONE_COUNTRY_CODE] = null;
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
     * Sets value of 'phone_number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhoneNumber($value)
    {
        return $this->set(self::PHONE_NUMBER, $value);
    }

    /**
     * Returns value of 'phone_number' property
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        $value = $this->get(self::PHONE_NUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'phone_number' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhoneNumber()
    {
        return $this->get(self::PHONE_NUMBER) !== null;
    }

    /**
     * Sets value of 'phone_country_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhoneCountryCode($value)
    {
        return $this->set(self::PHONE_COUNTRY_CODE, $value);
    }

    /**
     * Returns value of 'phone_country_code' property
     *
     * @return string
     */
    public function getPhoneCountryCode()
    {
        $value = $this->get(self::PHONE_COUNTRY_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'phone_country_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhoneCountryCode()
    {
        return $this->get(self::PHONE_COUNTRY_CODE) !== null;
    }
}
}