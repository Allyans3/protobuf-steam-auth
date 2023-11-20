<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * RefreshTokenDescription message embedded in CAuthentication_RefreshToken_Enumerate_Response message
 */
class CAuthentication_RefreshToken_Enumerate_Response_RefreshTokenDescription extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN_ID = 1;
    const TOKEN_DESCRIPTION = 2;
    const TIME_UPDATED = 3;
    const PLATFORM_TYPE = 4;
    const LOGGED_IN = 5;
    const OS_PLATFORM = 6;
    const AUTH_TYPE = 7;
    const GAMING_DEVICE_TYPE = 8;
    const FIRST_SEEN = 9;
    const LAST_SEEN = 10;
    const OS_TYPE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN_ID => array(
            'name' => 'token_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::TOKEN_DESCRIPTION => array(
            'name' => 'token_description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIME_UPDATED => array(
            'name' => 'time_updated',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLATFORM_TYPE => array(
            'default' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_Unknown,
            'name' => 'platform_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGGED_IN => array(
            'name' => 'logged_in',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::OS_PLATFORM => array(
            'name' => 'os_platform',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTH_TYPE => array(
            'name' => 'auth_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMING_DEVICE_TYPE => array(
            'name' => 'gaming_device_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRST_SEEN => array(
            'name' => 'first_seen',
            'required' => false,
            'type' => CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent::class
        ),
        self::LAST_SEEN => array(
            'name' => 'last_seen',
            'required' => false,
            'type' => CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent::class
        ),
        self::OS_TYPE => array(
            'name' => 'os_type',
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
        $this->values[self::TOKEN_ID] = null;
        $this->values[self::TOKEN_DESCRIPTION] = null;
        $this->values[self::TIME_UPDATED] = null;
        $this->values[self::PLATFORM_TYPE] = self::$fields[self::PLATFORM_TYPE]['default'];
        $this->values[self::LOGGED_IN] = null;
        $this->values[self::OS_PLATFORM] = null;
        $this->values[self::AUTH_TYPE] = null;
        $this->values[self::GAMING_DEVICE_TYPE] = null;
        $this->values[self::FIRST_SEEN] = null;
        $this->values[self::LAST_SEEN] = null;
        $this->values[self::OS_TYPE] = null;
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
     * Sets value of 'token_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenId($value)
    {
        return $this->set(self::TOKEN_ID, $value);
    }

    /**
     * Returns value of 'token_id' property
     *
     * @return integer
     */
    public function getTokenId()
    {
        $value = $this->get(self::TOKEN_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenId()
    {
        return $this->get(self::TOKEN_ID) !== null;
    }

    /**
     * Sets value of 'token_description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTokenDescription($value)
    {
        return $this->set(self::TOKEN_DESCRIPTION, $value);
    }

    /**
     * Returns value of 'token_description' property
     *
     * @return string
     */
    public function getTokenDescription()
    {
        $value = $this->get(self::TOKEN_DESCRIPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'token_description' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenDescription()
    {
        return $this->get(self::TOKEN_DESCRIPTION) !== null;
    }

    /**
     * Sets value of 'time_updated' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeUpdated($value)
    {
        return $this->set(self::TIME_UPDATED, $value);
    }

    /**
     * Returns value of 'time_updated' property
     *
     * @return integer
     */
    public function getTimeUpdated()
    {
        $value = $this->get(self::TIME_UPDATED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time_updated' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeUpdated()
    {
        return $this->get(self::TIME_UPDATED) !== null;
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
     * Sets value of 'logged_in' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setLoggedIn($value)
    {
        return $this->set(self::LOGGED_IN, $value);
    }

    /**
     * Returns value of 'logged_in' property
     *
     * @return boolean
     */
    public function getLoggedIn()
    {
        $value = $this->get(self::LOGGED_IN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'logged_in' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoggedIn()
    {
        return $this->get(self::LOGGED_IN) !== null;
    }

    /**
     * Sets value of 'os_platform' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOsPlatform($value)
    {
        return $this->set(self::OS_PLATFORM, $value);
    }

    /**
     * Returns value of 'os_platform' property
     *
     * @return integer
     */
    public function getOsPlatform()
    {
        $value = $this->get(self::OS_PLATFORM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'os_platform' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOsPlatform()
    {
        return $this->get(self::OS_PLATFORM) !== null;
    }

    /**
     * Sets value of 'auth_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthType($value)
    {
        return $this->set(self::AUTH_TYPE, $value);
    }

    /**
     * Returns value of 'auth_type' property
     *
     * @return integer
     */
    public function getAuthType()
    {
        $value = $this->get(self::AUTH_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'auth_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthType()
    {
        return $this->get(self::AUTH_TYPE) !== null;
    }

    /**
     * Sets value of 'gaming_device_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamingDeviceType($value)
    {
        return $this->set(self::GAMING_DEVICE_TYPE, $value);
    }

    /**
     * Returns value of 'gaming_device_type' property
     *
     * @return integer
     */
    public function getGamingDeviceType()
    {
        $value = $this->get(self::GAMING_DEVICE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gaming_device_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGamingDeviceType()
    {
        return $this->get(self::GAMING_DEVICE_TYPE) !== null;
    }

    /**
     * Sets value of 'first_seen' property
     *
     * @param CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent $value Property value
     *
     * @return null
     */
    public function setFirstSeen(CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent $value=null)
    {
        return $this->set(self::FIRST_SEEN, $value);
    }

    /**
     * Returns value of 'first_seen' property
     *
     * @return CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent
     */
    public function getFirstSeen()
    {
        return $this->get(self::FIRST_SEEN);
    }

    /**
     * Returns true if 'first_seen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFirstSeen()
    {
        return $this->get(self::FIRST_SEEN) !== null;
    }

    /**
     * Sets value of 'last_seen' property
     *
     * @param CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent $value Property value
     *
     * @return null
     */
    public function setLastSeen(CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent $value=null)
    {
        return $this->set(self::LAST_SEEN, $value);
    }

    /**
     * Returns value of 'last_seen' property
     *
     * @return CAuthentication_RefreshToken_Enumerate_Response_TokenUsageEvent
     */
    public function getLastSeen()
    {
        return $this->get(self::LAST_SEEN);
    }

    /**
     * Returns true if 'last_seen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastSeen()
    {
        return $this->get(self::LAST_SEEN) !== null;
    }

    /**
     * Sets value of 'os_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOsType($value)
    {
        return $this->set(self::OS_TYPE, $value);
    }

    /**
     * Returns value of 'os_type' property
     *
     * @return integer
     */
    public function getOsType()
    {
        $value = $this->get(self::OS_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'os_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOsType()
    {
        return $this->get(self::OS_TYPE) !== null;
    }
}
}