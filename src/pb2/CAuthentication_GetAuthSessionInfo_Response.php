<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_GetAuthSessionInfo_Response message
 */
class CAuthentication_GetAuthSessionInfo_Response extends \ProtobufMessage
{
    /* Field index constants */
    const IP = 1;
    const GEOLOC = 2;
    const CITY = 3;
    const STATE = 4;
    const COUNTRY = 5;
    const PLATFORM_TYPE = 6;
    const DEVICE_FRIENDLY_NAME = 7;
    const VERSION = 8;
    const LOGIN_HISTORY = 9;
    const REQUESTOR_LOCATION_MISMATCH = 10;
    const HIGH_USAGE_LOGIN = 11;
    const REQUESTED_PERSISTENCE = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IP => array(
            'name' => 'ip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GEOLOC => array(
            'name' => 'geoloc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY => array(
            'name' => 'country',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PLATFORM_TYPE => array(
            'default' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_Unknown,
            'name' => 'platform_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICE_FRIENDLY_NAME => array(
            'name' => 'device_friendly_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERSION => array(
            'name' => 'version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGIN_HISTORY => array(
            'default' => EAuthSessionSecurityHistory::k_EAuthSessionSecurityHistory_Invalid,
            'name' => 'login_history',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUESTOR_LOCATION_MISMATCH => array(
            'name' => 'requestor_location_mismatch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::HIGH_USAGE_LOGIN => array(
            'name' => 'high_usage_login',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::REQUESTED_PERSISTENCE => array(
            'default' => ESessionPersistence::k_ESessionPersistence_Invalid,
            'name' => 'requested_persistence',
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
        $this->values[self::IP] = null;
        $this->values[self::GEOLOC] = null;
        $this->values[self::CITY] = null;
        $this->values[self::STATE] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::PLATFORM_TYPE] = self::$fields[self::PLATFORM_TYPE]['default'];
        $this->values[self::DEVICE_FRIENDLY_NAME] = null;
        $this->values[self::VERSION] = null;
        $this->values[self::LOGIN_HISTORY] = self::$fields[self::LOGIN_HISTORY]['default'];
        $this->values[self::REQUESTOR_LOCATION_MISMATCH] = null;
        $this->values[self::HIGH_USAGE_LOGIN] = null;
        $this->values[self::REQUESTED_PERSISTENCE] = self::$fields[self::REQUESTED_PERSISTENCE]['default'];
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
     * Sets value of 'ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::IP, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return string
     */
    public function getIp()
    {
        $value = $this->get(self::IP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIp()
    {
        return $this->get(self::IP) !== null;
    }

    /**
     * Sets value of 'geoloc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGeoloc($value)
    {
        return $this->set(self::GEOLOC, $value);
    }

    /**
     * Returns value of 'geoloc' property
     *
     * @return string
     */
    public function getGeoloc()
    {
        $value = $this->get(self::GEOLOC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'geoloc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGeoloc()
    {
        return $this->get(self::GEOLOC) !== null;
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
     * Sets value of 'state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return string
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'country' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountry()
    {
        return $this->get(self::COUNTRY) !== null;
    }

    /**
     * Sets value of 'platform_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlatformType($value)
    {
        return $this->set(self::PLATFORM_TYPE, $value);
    }

    /**
     * Returns value of 'platform_type' property
     *
     * @return integer
     */
    public function getPlatformType()
    {
        $value = $this->get(self::PLATFORM_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'platform_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatformType()
    {
        return $this->get(self::PLATFORM_TYPE) !== null;
    }

    /**
     * Sets value of 'device_friendly_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceFriendlyName($value)
    {
        return $this->set(self::DEVICE_FRIENDLY_NAME, $value);
    }

    /**
     * Returns value of 'device_friendly_name' property
     *
     * @return string
     */
    public function getDeviceFriendlyName()
    {
        $value = $this->get(self::DEVICE_FRIENDLY_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'device_friendly_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceFriendlyName()
    {
        return $this->get(self::DEVICE_FRIENDLY_NAME) !== null;
    }

    /**
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->get(self::VERSION) !== null;
    }

    /**
     * Sets value of 'login_history' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoginHistory($value)
    {
        return $this->set(self::LOGIN_HISTORY, $value);
    }

    /**
     * Returns value of 'login_history' property
     *
     * @return integer
     */
    public function getLoginHistory()
    {
        $value = $this->get(self::LOGIN_HISTORY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'login_history' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginHistory()
    {
        return $this->get(self::LOGIN_HISTORY) !== null;
    }

    /**
     * Sets value of 'requestor_location_mismatch' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setRequestorLocationMismatch($value)
    {
        return $this->set(self::REQUESTOR_LOCATION_MISMATCH, $value);
    }

    /**
     * Returns value of 'requestor_location_mismatch' property
     *
     * @return boolean
     */
    public function getRequestorLocationMismatch()
    {
        $value = $this->get(self::REQUESTOR_LOCATION_MISMATCH);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'requestor_location_mismatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestorLocationMismatch()
    {
        return $this->get(self::REQUESTOR_LOCATION_MISMATCH) !== null;
    }

    /**
     * Sets value of 'high_usage_login' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHighUsageLogin($value)
    {
        return $this->set(self::HIGH_USAGE_LOGIN, $value);
    }

    /**
     * Returns value of 'high_usage_login' property
     *
     * @return boolean
     */
    public function getHighUsageLogin()
    {
        $value = $this->get(self::HIGH_USAGE_LOGIN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'high_usage_login' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHighUsageLogin()
    {
        return $this->get(self::HIGH_USAGE_LOGIN) !== null;
    }

    /**
     * Sets value of 'requested_persistence' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestedPersistence($value)
    {
        return $this->set(self::REQUESTED_PERSISTENCE, $value);
    }

    /**
     * Returns value of 'requested_persistence' property
     *
     * @return integer
     */
    public function getRequestedPersistence()
    {
        $value = $this->get(self::REQUESTED_PERSISTENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'requested_persistence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestedPersistence()
    {
        return $this->get(self::REQUESTED_PERSISTENCE) !== null;
    }
}
}