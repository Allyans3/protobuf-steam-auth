<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_RemoveAuthenticatorViaChallengeContinue_Request message
 */
class CTwoFactor_RemoveAuthenticatorViaChallengeContinue_Request extends \ProtobufMessage
{
    /* Field index constants */
    const SMS_CODE = 1;
    const GENERATE_NEW_TOKEN = 2;
    const VERSION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SMS_CODE => array(
            'name' => 'sms_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENERATE_NEW_TOKEN => array(
            'name' => 'generate_new_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::SMS_CODE] = null;
        $this->values[self::GENERATE_NEW_TOKEN] = null;
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
     * Sets value of 'sms_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmsCode($value)
    {
        return $this->set(self::SMS_CODE, $value);
    }

    /**
     * Returns value of 'sms_code' property
     *
     * @return string
     */
    public function getSmsCode()
    {
        $value = $this->get(self::SMS_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sms_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmsCode()
    {
        return $this->get(self::SMS_CODE) !== null;
    }

    /**
     * Sets value of 'generate_new_token' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setGenerateNewToken($value)
    {
        return $this->set(self::GENERATE_NEW_TOKEN, $value);
    }

    /**
     * Returns value of 'generate_new_token' property
     *
     * @return boolean
     */
    public function getGenerateNewToken()
    {
        $value = $this->get(self::GENERATE_NEW_TOKEN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'generate_new_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGenerateNewToken()
    {
        return $this->get(self::GENERATE_NEW_TOKEN) !== null;
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