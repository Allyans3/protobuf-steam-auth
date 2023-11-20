<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CSupportRefreshTokenDescription message
 */
class CSupportRefreshTokenDescription extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN_ID = 1;
    const TOKEN_DESCRIPTION = 2;
    const TIME_UPDATED = 3;
    const PLATFORM_TYPE = 4;
    const TOKEN_STATE = 5;
    const OWNER_STEAMID = 6;
    const OS_PLATFORM = 7;
    const OS_TYPE = 8;
    const AUTH_TYPE = 9;
    const GAMING_DEVICE_TYPE = 10;
    const FIRST_SEEN = 11;
    const LAST_SEEN = 12;

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
        self::TOKEN_STATE => array(
            'default' => EAuthTokenState::k_EAuthTokenState_Invalid,
            'name' => 'token_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OWNER_STEAMID => array(
            'name' => 'owner_steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::OS_PLATFORM => array(
            'name' => 'os_platform',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OS_TYPE => array(
            'name' => 'os_type',
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
            'type' => CSupportRefreshTokenDescription_TokenUsageEvent::class
        ),
        self::LAST_SEEN => array(
            'name' => 'last_seen',
            'required' => false,
            'type' => CSupportRefreshTokenDescription_TokenUsageEvent::class
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
        $this->values[self::TOKEN_STATE] = self::$fields[self::TOKEN_STATE]['default'];
        $this->values[self::OWNER_STEAMID] = null;
        $this->values[self::OS_PLATFORM] = null;
        $this->values[self::OS_TYPE] = null;
        $this->values[self::AUTH_TYPE] = null;
        $this->values[self::GAMING_DEVICE_TYPE] = null;
        $this->values[self::FIRST_SEEN] = null;
        $this->values[self::LAST_SEEN] = null;
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
     * Sets value of 'token_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenState($value)
    {
        return $this->set(self::TOKEN_STATE, $value);
    }

    /**
     * Returns value of 'token_state' property
     *
     * @return integer
     */
    public function getTokenState()
    {
        $value = $this->get(self::TOKEN_STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenState()
    {
        return $this->get(self::TOKEN_STATE) !== null;
    }

    /**
     * Sets value of 'owner_steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOwnerSteamid($value)
    {
        return $this->set(self::OWNER_STEAMID, $value);
    }

    /**
     * Returns value of 'owner_steamid' property
     *
     * @return integer
     */
    public function getOwnerSteamid()
    {
        $value = $this->get(self::OWNER_STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'owner_steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOwnerSteamid()
    {
        return $this->get(self::OWNER_STEAMID) !== null;
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
     * @param CSupportRefreshTokenDescription_TokenUsageEvent $value Property value
     *
     * @return null
     */
    public function setFirstSeen(CSupportRefreshTokenDescription_TokenUsageEvent $value=null)
    {
        return $this->set(self::FIRST_SEEN, $value);
    }

    /**
     * Returns value of 'first_seen' property
     *
     * @return CSupportRefreshTokenDescription_TokenUsageEvent
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
     * @param CSupportRefreshTokenDescription_TokenUsageEvent $value Property value
     *
     * @return null
     */
    public function setLastSeen(CSupportRefreshTokenDescription_TokenUsageEvent $value=null)
    {
        return $this->set(self::LAST_SEEN, $value);
    }

    /**
     * Returns value of 'last_seen' property
     *
     * @return CSupportRefreshTokenDescription_TokenUsageEvent
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
}
}