<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_AddAuthenticator_Request message
 */
class CTwoFactor_AddAuthenticator_Request extends \ProtobufMessage
{
    /* Field index constants */
    const STEAMID = 1;
    const AUTHENTICATOR_TIME = 2;
    const SERIAL_NUMBER = 3;
    const AUTHENTICATOR_TYPE = 4;
    const DEVICE_IDENTIFIER = 5;
    const SMS_PHONE_ID = 6;
    const HTTP_HEADERS = 7;
    const VERSION = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::AUTHENTICATOR_TIME => array(
            'name' => 'authenticator_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SERIAL_NUMBER => array(
            'name' => 'serial_number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::AUTHENTICATOR_TYPE => array(
            'name' => 'authenticator_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICE_IDENTIFIER => array(
            'name' => 'device_identifier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMS_PHONE_ID => array(
            'name' => 'sms_phone_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HTTP_HEADERS => array(
            'name' => 'http_headers',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERSION => array(
            'default' => 1,
            'name' => 'version',
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
        $this->values[self::STEAMID] = null;
        $this->values[self::AUTHENTICATOR_TIME] = null;
        $this->values[self::SERIAL_NUMBER] = null;
        $this->values[self::AUTHENTICATOR_TYPE] = null;
        $this->values[self::DEVICE_IDENTIFIER] = null;
        $this->values[self::SMS_PHONE_ID] = null;
        $this->values[self::HTTP_HEADERS] = array();
        $this->values[self::VERSION] = self::$fields[self::VERSION]['default'];
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
     * Sets value of 'steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSteamid($value)
    {
        return $this->set(self::STEAMID, $value);
    }

    /**
     * Returns value of 'steamid' property
     *
     * @return integer
     */
    public function getSteamid()
    {
        $value = $this->get(self::STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSteamid()
    {
        return $this->get(self::STEAMID) !== null;
    }

    /**
     * Sets value of 'authenticator_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthenticatorTime($value)
    {
        return $this->set(self::AUTHENTICATOR_TIME, $value);
    }

    /**
     * Returns value of 'authenticator_time' property
     *
     * @return integer
     */
    public function getAuthenticatorTime()
    {
        $value = $this->get(self::AUTHENTICATOR_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'authenticator_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthenticatorTime()
    {
        return $this->get(self::AUTHENTICATOR_TIME) !== null;
    }

    /**
     * Sets value of 'serial_number' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSerialNumber($value)
    {
        return $this->set(self::SERIAL_NUMBER, $value);
    }

    /**
     * Returns value of 'serial_number' property
     *
     * @return integer
     */
    public function getSerialNumber()
    {
        $value = $this->get(self::SERIAL_NUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serial_number' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSerialNumber()
    {
        return $this->get(self::SERIAL_NUMBER) !== null;
    }

    /**
     * Sets value of 'authenticator_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthenticatorType($value)
    {
        return $this->set(self::AUTHENTICATOR_TYPE, $value);
    }

    /**
     * Returns value of 'authenticator_type' property
     *
     * @return integer
     */
    public function getAuthenticatorType()
    {
        $value = $this->get(self::AUTHENTICATOR_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'authenticator_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthenticatorType()
    {
        return $this->get(self::AUTHENTICATOR_TYPE) !== null;
    }

    /**
     * Sets value of 'device_identifier' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceIdentifier($value)
    {
        return $this->set(self::DEVICE_IDENTIFIER, $value);
    }

    /**
     * Returns value of 'device_identifier' property
     *
     * @return string
     */
    public function getDeviceIdentifier()
    {
        $value = $this->get(self::DEVICE_IDENTIFIER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'device_identifier' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceIdentifier()
    {
        return $this->get(self::DEVICE_IDENTIFIER) !== null;
    }

    /**
     * Sets value of 'sms_phone_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmsPhoneId($value)
    {
        return $this->set(self::SMS_PHONE_ID, $value);
    }

    /**
     * Returns value of 'sms_phone_id' property
     *
     * @return string
     */
    public function getSmsPhoneId()
    {
        $value = $this->get(self::SMS_PHONE_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sms_phone_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmsPhoneId()
    {
        return $this->get(self::SMS_PHONE_ID) !== null;
    }

    /**
     * Appends value to 'http_headers' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendHttpHeaders($value)
    {
        return $this->append(self::HTTP_HEADERS, $value);
    }

    /**
     * Clears 'http_headers' list
     *
     * @return null
     */
    public function clearHttpHeaders()
    {
        return $this->clear(self::HTTP_HEADERS);
    }

    /**
     * Returns 'http_headers' list
     *
     * @return string[]
     */
    public function getHttpHeaders()
    {
        return $this->get(self::HTTP_HEADERS);
    }

    /**
     * Returns true if 'http_headers' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHttpHeaders()
    {
        return count($this->get(self::HTTP_HEADERS)) !== 0;
    }

    /**
     * Returns 'http_headers' iterator
     *
     * @return \ArrayIterator
     */
    public function getHttpHeadersIterator()
    {
        return new \ArrayIterator($this->get(self::HTTP_HEADERS));
    }

    /**
     * Returns element from 'http_headers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getHttpHeadersAt($offset)
    {
        return $this->get(self::HTTP_HEADERS, $offset);
    }

    /**
     * Returns count of 'http_headers' list
     *
     * @return int
     */
    public function getHttpHeadersCount()
    {
        return $this->count(self::HTTP_HEADERS);
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
}
}