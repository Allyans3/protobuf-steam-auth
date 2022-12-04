<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_BeginAuthSessionViaCredentials_Request message
 */
class CAuthentication_BeginAuthSessionViaCredentials_Request extends \ProtobufMessage
{
    /* Field index constants */
    const DEVICE_FRIENDLY_NAME = 1;
    const ACCOUNT_NAME = 2;
    const ENCRYPTED_PASSWORD = 3;
    const ENCRYPTION_TIMESTAMP = 4;
    const REMEMBER_LOGIN = 5;
    const PLATFORM_TYPE = 6;
    const PERSISTENCE = 7;
    const WEBSITE_ID = 8;
    const DEVICE_DETAILS = 9;
    const GUARD_DATA = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEVICE_FRIENDLY_NAME => array(
            'name' => 'device_friendly_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCOUNT_NAME => array(
            'name' => 'account_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYPTED_PASSWORD => array(
            'name' => 'encrypted_password',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYPTION_TIMESTAMP => array(
            'name' => 'encryption_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMEMBER_LOGIN => array(
            'name' => 'remember_login',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PLATFORM_TYPE => array(
            'default' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_Unknown,
            'name' => 'platform_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PERSISTENCE => array(
            'default' => ESessionPersistence::k_ESessionPersistence_Persistent,
            'name' => 'persistence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEBSITE_ID => array(
            'default' => 'Unknown',
            'name' => 'website_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICE_DETAILS => array(
            'name' => 'device_details',
            'required' => false,
            'type' => CAuthentication_DeviceDetails::class
        ),
        self::GUARD_DATA => array(
            'name' => 'guard_data',
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
        $this->values[self::DEVICE_FRIENDLY_NAME] = null;
        $this->values[self::ACCOUNT_NAME] = null;
        $this->values[self::ENCRYPTED_PASSWORD] = null;
        $this->values[self::ENCRYPTION_TIMESTAMP] = null;
        $this->values[self::REMEMBER_LOGIN] = null;
        $this->values[self::PLATFORM_TYPE] = self::$fields[self::PLATFORM_TYPE]['default'];
        $this->values[self::PERSISTENCE] = self::$fields[self::PERSISTENCE]['default'];
        $this->values[self::WEBSITE_ID] = self::$fields[self::WEBSITE_ID]['default'];
        $this->values[self::DEVICE_DETAILS] = null;
        $this->values[self::GUARD_DATA] = null;
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
     * Sets value of 'account_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccountName($value)
    {
        return $this->set(self::ACCOUNT_NAME, $value);
    }

    /**
     * Returns value of 'account_name' property
     *
     * @return string
     */
    public function getAccountName()
    {
        $value = $this->get(self::ACCOUNT_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'account_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccountName()
    {
        return $this->get(self::ACCOUNT_NAME) !== null;
    }

    /**
     * Sets value of 'encrypted_password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEncryptedPassword($value)
    {
        return $this->set(self::ENCRYPTED_PASSWORD, $value);
    }

    /**
     * Returns value of 'encrypted_password' property
     *
     * @return string
     */
    public function getEncryptedPassword()
    {
        $value = $this->get(self::ENCRYPTED_PASSWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'encrypted_password' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryptedPassword()
    {
        return $this->get(self::ENCRYPTED_PASSWORD) !== null;
    }

    /**
     * Sets value of 'encryption_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEncryptionTimestamp($value)
    {
        return $this->set(self::ENCRYPTION_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'encryption_timestamp' property
     *
     * @return integer
     */
    public function getEncryptionTimestamp()
    {
        $value = $this->get(self::ENCRYPTION_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'encryption_timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryptionTimestamp()
    {
        return $this->get(self::ENCRYPTION_TIMESTAMP) !== null;
    }

    /**
     * Sets value of 'remember_login' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setRememberLogin($value)
    {
        return $this->set(self::REMEMBER_LOGIN, $value);
    }

    /**
     * Returns value of 'remember_login' property
     *
     * @return boolean
     */
    public function getRememberLogin()
    {
        $value = $this->get(self::REMEMBER_LOGIN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'remember_login' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRememberLogin()
    {
        return $this->get(self::REMEMBER_LOGIN) !== null;
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
     * Sets value of 'persistence' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPersistence($value)
    {
        return $this->set(self::PERSISTENCE, $value);
    }

    /**
     * Returns value of 'persistence' property
     *
     * @return integer
     */
    public function getPersistence()
    {
        $value = $this->get(self::PERSISTENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'persistence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPersistence()
    {
        return $this->get(self::PERSISTENCE) !== null;
    }

    /**
     * Sets value of 'website_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebsiteId($value)
    {
        return $this->set(self::WEBSITE_ID, $value);
    }

    /**
     * Returns value of 'website_id' property
     *
     * @return string
     */
    public function getWebsiteId()
    {
        $value = $this->get(self::WEBSITE_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'website_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWebsiteId()
    {
        return $this->get(self::WEBSITE_ID) !== null;
    }

    /**
     * Sets value of 'device_details' property
     *
     * @param \CAuthentication_DeviceDetails $value Property value
     *
     * @return null
     */
    public function setDeviceDetails(\CAuthentication_DeviceDetails $value=null)
    {
        return $this->set(self::DEVICE_DETAILS, $value);
    }

    /**
     * Returns value of 'device_details' property
     *
     * @return \CAuthentication_DeviceDetails
     */
    public function getDeviceDetails()
    {
        return $this->get(self::DEVICE_DETAILS);
    }

    /**
     * Returns true if 'device_details' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceDetails()
    {
        return $this->get(self::DEVICE_DETAILS) !== null;
    }

    /**
     * Sets value of 'guard_data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuardData($value)
    {
        return $this->set(self::GUARD_DATA, $value);
    }

    /**
     * Returns value of 'guard_data' property
     *
     * @return string
     */
    public function getGuardData()
    {
        $value = $this->get(self::GUARD_DATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guard_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuardData()
    {
        return $this->get(self::GUARD_DATA) !== null;
    }
}
}