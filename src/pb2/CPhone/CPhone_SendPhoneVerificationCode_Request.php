<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_SendPhoneVerificationCode_Request message
 */
class CPhone_SendPhoneVerificationCode_Request extends \ProtobufMessage
{
    /* Field index constants */
    const LANGUAGE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LANGUAGE => array(
            'name' => 'language',
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
        $this->values[self::LANGUAGE] = null;
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
     * Sets value of 'language' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'language' property
     *
     * @return integer
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
    }
}
}