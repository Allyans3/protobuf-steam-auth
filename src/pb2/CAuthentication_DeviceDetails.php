<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_DeviceDetails message
 */
class CAuthentication_DeviceDetails extends \ProtobufMessage
{
    /* Field index constants */
    const DEVICE_FRIENDLY_NAME = 1;
    const PLATFORM_TYPE = 2;
    const OS_TYPE = 3;
    const GAMING_DEVICE_TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEVICE_FRIENDLY_NAME => array(
            'name' => 'device_friendly_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PLATFORM_TYPE => array(
            'default' => EAuthTokenPlatformType::k_EAuthTokenPlatformType_Unknown,
            'name' => 'platform_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OS_TYPE => array(
            'name' => 'os_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMING_DEVICE_TYPE => array(
            'name' => 'gaming_device_type',
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
        $this->values[self::DEVICE_FRIENDLY_NAME] = null;
        $this->values[self::PLATFORM_TYPE] = self::$fields[self::PLATFORM_TYPE]['default'];
        $this->values[self::OS_TYPE] = null;
        $this->values[self::GAMING_DEVICE_TYPE] = null;
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
}
}