<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_SendEmail_Request message
 */
class CTwoFactor_SendEmail_Request extends \ProtobufMessage
{
    /* Field index constants */
    const STEAMID = 1;
    const EMAIL_TYPE = 2;
    const INCLUDE_ACTIVATION_CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::EMAIL_TYPE => array(
            'name' => 'email_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INCLUDE_ACTIVATION_CODE => array(
            'name' => 'include_activation_code',
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
        $this->values[self::EMAIL_TYPE] = null;
        $this->values[self::INCLUDE_ACTIVATION_CODE] = null;
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
     * Sets value of 'email_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEmailType($value)
    {
        return $this->set(self::EMAIL_TYPE, $value);
    }

    /**
     * Returns value of 'email_type' property
     *
     * @return integer
     */
    public function getEmailType()
    {
        $value = $this->get(self::EMAIL_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'email_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmailType()
    {
        return $this->get(self::EMAIL_TYPE) !== null;
    }

    /**
     * Sets value of 'include_activation_code' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIncludeActivationCode($value)
    {
        return $this->set(self::INCLUDE_ACTIVATION_CODE, $value);
    }

    /**
     * Returns value of 'include_activation_code' property
     *
     * @return boolean
     */
    public function getIncludeActivationCode()
    {
        $value = $this->get(self::INCLUDE_ACTIVATION_CODE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'include_activation_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIncludeActivationCode()
    {
        return $this->get(self::INCLUDE_ACTIVATION_CODE) !== null;
    }
}
}