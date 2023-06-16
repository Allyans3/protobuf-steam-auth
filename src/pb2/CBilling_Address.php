<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CBilling_Address message
 */
class CBilling_Address extends \ProtobufMessage
{
    /* Field index constants */
    const FIRST_NAME = 1;
    const LAST_NAME = 2;
    const ADDRESS1 = 3;
    const ADDRESS2 = 4;
    const CITY = 5;
    const US_STATE = 6;
    const COUNTRY_CODE = 7;
    const POSTCODE = 8;
    const ZIP_PLUS4 = 9;
    const PHONE = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FIRST_NAME => array(
            'name' => 'first_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LAST_NAME => array(
            'name' => 'last_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDRESS1 => array(
            'name' => 'address1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDRESS2 => array(
            'name' => 'address2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::US_STATE => array(
            'name' => 'us_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY_CODE => array(
            'name' => 'country_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::POSTCODE => array(
            'name' => 'postcode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ZIP_PLUS4 => array(
            'name' => 'zip_plus4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHONE => array(
            'name' => 'phone',
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
        $this->values[self::FIRST_NAME] = null;
        $this->values[self::LAST_NAME] = null;
        $this->values[self::ADDRESS1] = null;
        $this->values[self::ADDRESS2] = null;
        $this->values[self::CITY] = null;
        $this->values[self::US_STATE] = null;
        $this->values[self::COUNTRY_CODE] = null;
        $this->values[self::POSTCODE] = null;
        $this->values[self::ZIP_PLUS4] = null;
        $this->values[self::PHONE] = null;
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
     * Sets value of 'first_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstName($value)
    {
        return $this->set(self::FIRST_NAME, $value);
    }

    /**
     * Returns value of 'first_name' property
     *
     * @return string
     */
    public function getFirstName()
    {
        $value = $this->get(self::FIRST_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'first_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFirstName()
    {
        return $this->get(self::FIRST_NAME) !== null;
    }

    /**
     * Sets value of 'last_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastName($value)
    {
        return $this->set(self::LAST_NAME, $value);
    }

    /**
     * Returns value of 'last_name' property
     *
     * @return string
     */
    public function getLastName()
    {
        $value = $this->get(self::LAST_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'last_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastName()
    {
        return $this->get(self::LAST_NAME) !== null;
    }

    /**
     * Sets value of 'address1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress1($value)
    {
        return $this->set(self::ADDRESS1, $value);
    }

    /**
     * Returns value of 'address1' property
     *
     * @return string
     */
    public function getAddress1()
    {
        $value = $this->get(self::ADDRESS1);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'address1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddress1()
    {
        return $this->get(self::ADDRESS1) !== null;
    }

    /**
     * Sets value of 'address2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress2($value)
    {
        return $this->set(self::ADDRESS2, $value);
    }

    /**
     * Returns value of 'address2' property
     *
     * @return string
     */
    public function getAddress2()
    {
        $value = $this->get(self::ADDRESS2);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'address2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddress2()
    {
        return $this->get(self::ADDRESS2) !== null;
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'city' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCity()
    {
        return $this->get(self::CITY) !== null;
    }

    /**
     * Sets value of 'us_state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsState($value)
    {
        return $this->set(self::US_STATE, $value);
    }

    /**
     * Returns value of 'us_state' property
     *
     * @return string
     */
    public function getUsState()
    {
        $value = $this->get(self::US_STATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'us_state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsState()
    {
        return $this->get(self::US_STATE) !== null;
    }

    /**
     * Sets value of 'country_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountryCode($value)
    {
        return $this->set(self::COUNTRY_CODE, $value);
    }

    /**
     * Returns value of 'country_code' property
     *
     * @return string
     */
    public function getCountryCode()
    {
        $value = $this->get(self::COUNTRY_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'country_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountryCode()
    {
        return $this->get(self::COUNTRY_CODE) !== null;
    }

    /**
     * Sets value of 'postcode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPostcode($value)
    {
        return $this->set(self::POSTCODE, $value);
    }

    /**
     * Returns value of 'postcode' property
     *
     * @return string
     */
    public function getPostcode()
    {
        $value = $this->get(self::POSTCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'postcode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostcode()
    {
        return $this->get(self::POSTCODE) !== null;
    }

    /**
     * Sets value of 'zip_plus4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZipPlus4($value)
    {
        return $this->set(self::ZIP_PLUS4, $value);
    }

    /**
     * Returns value of 'zip_plus4' property
     *
     * @return integer
     */
    public function getZipPlus4()
    {
        $value = $this->get(self::ZIP_PLUS4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zip_plus4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZipPlus4()
    {
        return $this->get(self::ZIP_PLUS4) !== null;
    }

    /**
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        $value = $this->get(self::PHONE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'phone' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhone()
    {
        return $this->get(self::PHONE) !== null;
    }
}
}