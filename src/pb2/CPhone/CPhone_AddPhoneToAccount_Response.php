<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_AddPhoneToAccount_Response message
 */
class CPhone_AddPhoneToAccount_Response extends \ProtobufMessage
{
    /* Field index constants */
    const SUCCESS = 1;
    const PHONE_NUMBER_TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUCCESS => array(
            'name' => 'success',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PHONE_NUMBER_TYPE => array(
            'name' => 'phone_number_type',
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
        $this->values[self::SUCCESS] = null;
        $this->values[self::PHONE_NUMBER_TYPE] = null;
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
     * Sets value of 'success' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSuccess($value)
    {
        return $this->set(self::SUCCESS, $value);
    }

    /**
     * Returns value of 'success' property
     *
     * @return boolean
     */
    public function getSuccess()
    {
        $value = $this->get(self::SUCCESS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'success' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSuccess()
    {
        return $this->get(self::SUCCESS) !== null;
    }

    /**
     * Sets value of 'phone_number_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPhoneNumberType($value)
    {
        return $this->set(self::PHONE_NUMBER_TYPE, $value);
    }

    /**
     * Returns value of 'phone_number_type' property
     *
     * @return integer
     */
    public function getPhoneNumberType()
    {
        $value = $this->get(self::PHONE_NUMBER_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'phone_number_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhoneNumberType()
    {
        return $this->get(self::PHONE_NUMBER_TYPE) !== null;
    }
}
}