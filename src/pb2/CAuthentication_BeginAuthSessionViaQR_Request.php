<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_BeginAuthSessionViaQR_Request message
 */
class CAuthentication_BeginAuthSessionViaQR_Request extends \ProtobufMessage
{
    /* Field index constants */
    const DEVICE_FRIENDLY_NAME = 1;
    const PLATFORM_TYPE = 2;
    const DEVICE_DETAILS = 3;
    const WEBSITE_ID = 4;

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
        self::DEVICE_DETAILS => array(
            'name' => 'device_details',
            'required' => false,
            'type' => CAuthentication_DeviceDetails::class
        ),
        self::WEBSITE_ID => array(
            'default' => 'Unknown',
            'name' => 'website_id',
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
        $this->values[self::PLATFORM_TYPE] = self::$fields[self::PLATFORM_TYPE]['default'];
        $this->values[self::DEVICE_DETAILS] = null;
        $this->values[self::WEBSITE_ID] = self::$fields[self::WEBSITE_ID]['default'];
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
     * Sets value of 'device_details' property
     *
     * @param CAuthentication_DeviceDetails $value Property value
     *
     * @return null
     */
    public function setDeviceDetails(CAuthentication_DeviceDetails $value=null)
    {
        return $this->set(self::DEVICE_DETAILS, $value);
    }

    /**
     * Returns value of 'device_details' property
     *
     * @return CAuthentication_DeviceDetails
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
}
}