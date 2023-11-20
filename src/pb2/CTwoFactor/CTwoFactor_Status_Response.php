<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_Status_Response message
 */
class CTwoFactor_Status_Response extends \ProtobufMessage
{
    /* Field index constants */
    const STATE = 1;
    const INACTIVATION_REASON = 2;
    const AUTHENTICATOR_TYPE = 3;
    const AUTHENTICATOR_ALLOWED = 4;
    const STEAMGUARD_SCHEME = 5;
    const TOKEN_GID = 6;
    const EMAIL_VALIDATED = 7;
    const DEVICE_IDENTIFIER = 8;
    const TIME_CREATED = 9;
    const REVOCATION_ATTEMPTS_REMAINING = 10;
    const CLASSIFIED_AGENT = 11;
    const ALLOW_EXTERNAL_AUTHENTICATOR = 12;
    const TIME_TRANSFERRED = 13;
    const VERSION = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INACTIVATION_REASON => array(
            'name' => 'inactivation_reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHENTICATOR_TYPE => array(
            'name' => 'authenticator_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHENTICATOR_ALLOWED => array(
            'name' => 'authenticator_allowed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::STEAMGUARD_SCHEME => array(
            'name' => 'steamguard_scheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOKEN_GID => array(
            'name' => 'token_gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMAIL_VALIDATED => array(
            'name' => 'email_validated',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DEVICE_IDENTIFIER => array(
            'name' => 'device_identifier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIME_CREATED => array(
            'name' => 'time_created',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REVOCATION_ATTEMPTS_REMAINING => array(
            'name' => 'revocation_attempts_remaining',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLASSIFIED_AGENT => array(
            'name' => 'classified_agent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALLOW_EXTERNAL_AUTHENTICATOR => array(
            'name' => 'allow_external_authenticator',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TIME_TRANSFERRED => array(
            'name' => 'time_transferred',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERSION => array(
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
        $this->values[self::STATE] = null;
        $this->values[self::INACTIVATION_REASON] = null;
        $this->values[self::AUTHENTICATOR_TYPE] = null;
        $this->values[self::AUTHENTICATOR_ALLOWED] = null;
        $this->values[self::STEAMGUARD_SCHEME] = null;
        $this->values[self::TOKEN_GID] = null;
        $this->values[self::EMAIL_VALIDATED] = null;
        $this->values[self::DEVICE_IDENTIFIER] = null;
        $this->values[self::TIME_CREATED] = null;
        $this->values[self::REVOCATION_ATTEMPTS_REMAINING] = null;
        $this->values[self::CLASSIFIED_AGENT] = null;
        $this->values[self::ALLOW_EXTERNAL_AUTHENTICATOR] = null;
        $this->values[self::TIME_TRANSFERRED] = null;
        $this->values[self::VERSION] = null;
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
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'inactivation_reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInactivationReason($value)
    {
        return $this->set(self::INACTIVATION_REASON, $value);
    }

    /**
     * Returns value of 'inactivation_reason' property
     *
     * @return integer
     */
    public function getInactivationReason()
    {
        $value = $this->get(self::INACTIVATION_REASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'inactivation_reason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInactivationReason()
    {
        return $this->get(self::INACTIVATION_REASON) !== null;
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
     * Sets value of 'authenticator_allowed' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAuthenticatorAllowed($value)
    {
        return $this->set(self::AUTHENTICATOR_ALLOWED, $value);
    }

    /**
     * Returns value of 'authenticator_allowed' property
     *
     * @return boolean
     */
    public function getAuthenticatorAllowed()
    {
        $value = $this->get(self::AUTHENTICATOR_ALLOWED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'authenticator_allowed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthenticatorAllowed()
    {
        return $this->get(self::AUTHENTICATOR_ALLOWED) !== null;
    }

    /**
     * Sets value of 'steamguard_scheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSteamguardScheme($value)
    {
        return $this->set(self::STEAMGUARD_SCHEME, $value);
    }

    /**
     * Returns value of 'steamguard_scheme' property
     *
     * @return integer
     */
    public function getSteamguardScheme()
    {
        $value = $this->get(self::STEAMGUARD_SCHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'steamguard_scheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSteamguardScheme()
    {
        return $this->get(self::STEAMGUARD_SCHEME) !== null;
    }

    /**
     * Sets value of 'token_gid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTokenGid($value)
    {
        return $this->set(self::TOKEN_GID, $value);
    }

    /**
     * Returns value of 'token_gid' property
     *
     * @return string
     */
    public function getTokenGid()
    {
        $value = $this->get(self::TOKEN_GID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'token_gid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenGid()
    {
        return $this->get(self::TOKEN_GID) !== null;
    }

    /**
     * Sets value of 'email_validated' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEmailValidated($value)
    {
        return $this->set(self::EMAIL_VALIDATED, $value);
    }

    /**
     * Returns value of 'email_validated' property
     *
     * @return boolean
     */
    public function getEmailValidated()
    {
        $value = $this->get(self::EMAIL_VALIDATED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'email_validated' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmailValidated()
    {
        return $this->get(self::EMAIL_VALIDATED) !== null;
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
     * Sets value of 'time_created' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeCreated($value)
    {
        return $this->set(self::TIME_CREATED, $value);
    }

    /**
     * Returns value of 'time_created' property
     *
     * @return integer
     */
    public function getTimeCreated()
    {
        $value = $this->get(self::TIME_CREATED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time_created' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeCreated()
    {
        return $this->get(self::TIME_CREATED) !== null;
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

    /**
     * Sets value of 'classified_agent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClassifiedAgent($value)
    {
        return $this->set(self::CLASSIFIED_AGENT, $value);
    }

    /**
     * Returns value of 'classified_agent' property
     *
     * @return string
     */
    public function getClassifiedAgent()
    {
        $value = $this->get(self::CLASSIFIED_AGENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'classified_agent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClassifiedAgent()
    {
        return $this->get(self::CLASSIFIED_AGENT) !== null;
    }

    /**
     * Sets value of 'allow_external_authenticator' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAllowExternalAuthenticator($value)
    {
        return $this->set(self::ALLOW_EXTERNAL_AUTHENTICATOR, $value);
    }

    /**
     * Returns value of 'allow_external_authenticator' property
     *
     * @return boolean
     */
    public function getAllowExternalAuthenticator()
    {
        $value = $this->get(self::ALLOW_EXTERNAL_AUTHENTICATOR);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'allow_external_authenticator' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllowExternalAuthenticator()
    {
        return $this->get(self::ALLOW_EXTERNAL_AUTHENTICATOR) !== null;
    }

    /**
     * Sets value of 'time_transferred' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeTransferred($value)
    {
        return $this->set(self::TIME_TRANSFERRED, $value);
    }

    /**
     * Returns value of 'time_transferred' property
     *
     * @return integer
     */
    public function getTimeTransferred()
    {
        $value = $this->get(self::TIME_TRANSFERRED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time_transferred' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeTransferred()
    {
        return $this->get(self::TIME_TRANSFERRED) !== null;
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