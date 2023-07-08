<?php
/**
 * Auto generated from service_twofactor.proto at 2023-07-08 08:31:13
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_FinalizeAddAuthenticator_Request message
 */
class CTwoFactor_FinalizeAddAuthenticator_Request extends \ProtobufMessage
{
    /* Field index constants */
    const STEAMID = 1;
    const AUTHENTICATOR_CODE = 2;
    const AUTHENTICATOR_TIME = 3;
    const ACTIVATION_CODE = 4;
    const HTTP_HEADERS = 5;
    const VALIDATE_SMS_CODE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::AUTHENTICATOR_CODE => array(
            'name' => 'authenticator_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTHENTICATOR_TIME => array(
            'name' => 'authenticator_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTIVATION_CODE => array(
            'name' => 'activation_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HTTP_HEADERS => array(
            'name' => 'http_headers',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALIDATE_SMS_CODE => array(
            'name' => 'validate_sms_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::AUTHENTICATOR_CODE] = null;
        $this->values[self::AUTHENTICATOR_TIME] = null;
        $this->values[self::ACTIVATION_CODE] = null;
        $this->values[self::HTTP_HEADERS] = array();
        $this->values[self::VALIDATE_SMS_CODE] = null;
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
     * Sets value of 'authenticator_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthenticatorCode($value)
    {
        return $this->set(self::AUTHENTICATOR_CODE, $value);
    }

    /**
     * Returns value of 'authenticator_code' property
     *
     * @return string
     */
    public function getAuthenticatorCode()
    {
        $value = $this->get(self::AUTHENTICATOR_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'authenticator_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthenticatorCode()
    {
        return $this->get(self::AUTHENTICATOR_CODE) !== null;
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
     * Sets value of 'activation_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setActivationCode($value)
    {
        return $this->set(self::ACTIVATION_CODE, $value);
    }

    /**
     * Returns value of 'activation_code' property
     *
     * @return string
     */
    public function getActivationCode()
    {
        $value = $this->get(self::ACTIVATION_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'activation_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActivationCode()
    {
        return $this->get(self::ACTIVATION_CODE) !== null;
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
     * Sets value of 'validate_sms_code' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setValidateSmsCode($value)
    {
        return $this->set(self::VALIDATE_SMS_CODE, $value);
    }

    /**
     * Returns value of 'validate_sms_code' property
     *
     * @return boolean
     */
    public function getValidateSmsCode()
    {
        $value = $this->get(self::VALIDATE_SMS_CODE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'validate_sms_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValidateSmsCode()
    {
        return $this->get(self::VALIDATE_SMS_CODE) !== null;
    }
}
}