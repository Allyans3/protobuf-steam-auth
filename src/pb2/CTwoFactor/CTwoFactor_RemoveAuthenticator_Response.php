<?php
/**
 * Auto generated from service_twofactor.proto at 2023-07-08 08:31:13
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_RemoveAuthenticator_Response message
 */
class CTwoFactor_RemoveAuthenticator_Response extends \ProtobufMessage
{
    /* Field index constants */
    const SUCCESS = 1;
    const SERVER_TIME = 3;
    const REVOCATION_ATTEMPTS_REMAINING = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUCCESS => array(
            'name' => 'success',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SERVER_TIME => array(
            'name' => 'server_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REVOCATION_ATTEMPTS_REMAINING => array(
            'name' => 'revocation_attempts_remaining',
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
        $this->values[self::SUCCESS] = null;
        $this->values[self::SERVER_TIME] = null;
        $this->values[self::REVOCATION_ATTEMPTS_REMAINING] = null;
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
     * Sets value of 'success' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSuccess($value)
    {
        return $this->set(self::SUCCESS, $value);
    }

    /**
     * Returns value of 'success' property
     *
     * @return boolean
     */
    public function getSuccess()
    {
        $value = $this->get(self::SUCCESS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'success' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSuccess()
    {
        return $this->get(self::SUCCESS) !== null;
    }

    /**
     * Sets value of 'server_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServerTime($value)
    {
        return $this->set(self::SERVER_TIME, $value);
    }

    /**
     * Returns value of 'server_time' property
     *
     * @return integer
     */
    public function getServerTime()
    {
        $value = $this->get(self::SERVER_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'server_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerTime()
    {
        return $this->get(self::SERVER_TIME) !== null;
    }

    /**
     * Sets value of 'revocation_attempts_remaining' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRevocationAttemptsRemaining($value)
    {
        return $this->set(self::REVOCATION_ATTEMPTS_REMAINING, $value);
    }

    /**
     * Returns value of 'revocation_attempts_remaining' property
     *
     * @return integer
     */
    public function getRevocationAttemptsRemaining()
    {
        $value = $this->get(self::REVOCATION_ATTEMPTS_REMAINING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'revocation_attempts_remaining' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRevocationAttemptsRemaining()
    {
        return $this->get(self::REVOCATION_ATTEMPTS_REMAINING) !== null;
    }
}
}