<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_IsAccountWaitingForEmailConfirmation_Response message
 */
class CPhone_IsAccountWaitingForEmailConfirmation_Response extends \ProtobufMessage
{
    /* Field index constants */
    const AWAITING_EMAIL_CONFIRMATION = 1;
    const SECONDS_TO_WAIT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AWAITING_EMAIL_CONFIRMATION => array(
            'name' => 'awaiting_email_confirmation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SECONDS_TO_WAIT => array(
            'name' => 'seconds_to_wait',
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
        $this->values[self::AWAITING_EMAIL_CONFIRMATION] = null;
        $this->values[self::SECONDS_TO_WAIT] = null;
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
     * Sets value of 'awaiting_email_confirmation' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAwaitingEmailConfirmation($value)
    {
        return $this->set(self::AWAITING_EMAIL_CONFIRMATION, $value);
    }

    /**
     * Returns value of 'awaiting_email_confirmation' property
     *
     * @return boolean
     */
    public function getAwaitingEmailConfirmation()
    {
        $value = $this->get(self::AWAITING_EMAIL_CONFIRMATION);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'awaiting_email_confirmation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAwaitingEmailConfirmation()
    {
        return $this->get(self::AWAITING_EMAIL_CONFIRMATION) !== null;
    }

    /**
     * Sets value of 'seconds_to_wait' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSecondsToWait($value)
    {
        return $this->set(self::SECONDS_TO_WAIT, $value);
    }

    /**
     * Returns value of 'seconds_to_wait' property
     *
     * @return integer
     */
    public function getSecondsToWait()
    {
        $value = $this->get(self::SECONDS_TO_WAIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'seconds_to_wait' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSecondsToWait()
    {
        return $this->get(self::SECONDS_TO_WAIT) !== null;
    }
}
}