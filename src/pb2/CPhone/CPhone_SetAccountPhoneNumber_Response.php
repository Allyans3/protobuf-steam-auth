<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_SetAccountPhoneNumber_Response message
 */
class CPhone_SetAccountPhoneNumber_Response extends \ProtobufMessage
{
    /* Field index constants */
    const CONFIRMATION_EMAIL_ADDRESS = 1;
    const PHONE_NUMBER_FORMATTED = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFIRMATION_EMAIL_ADDRESS => array(
            'name' => 'confirmation_email_address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHONE_NUMBER_FORMATTED => array(
            'name' => 'phone_number_formatted',
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
        $this->values[self::CONFIRMATION_EMAIL_ADDRESS] = null;
        $this->values[self::PHONE_NUMBER_FORMATTED] = null;
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
     * Sets value of 'confirmation_email_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConfirmationEmailAddress($value)
    {
        return $this->set(self::CONFIRMATION_EMAIL_ADDRESS, $value);
    }

    /**
     * Returns value of 'confirmation_email_address' property
     *
     * @return string
     */
    public function getConfirmationEmailAddress()
    {
        $value = $this->get(self::CONFIRMATION_EMAIL_ADDRESS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'confirmation_email_address' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfirmationEmailAddress()
    {
        return $this->get(self::CONFIRMATION_EMAIL_ADDRESS) !== null;
    }

    /**
     * Sets value of 'phone_number_formatted' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhoneNumberFormatted($value)
    {
        return $this->set(self::PHONE_NUMBER_FORMATTED, $value);
    }

    /**
     * Returns value of 'phone_number_formatted' property
     *
     * @return string
     */
    public function getPhoneNumberFormatted()
    {
        $value = $this->get(self::PHONE_NUMBER_FORMATTED);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'phone_number_formatted' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhoneNumberFormatted()
    {
        return $this->get(self::PHONE_NUMBER_FORMATTED) !== null;
    }
}
}