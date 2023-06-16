<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_BeginAuthSessionViaCredentials_Response message
 */
class CAuthentication_BeginAuthSessionViaCredentials_Response extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_ID = 1;
    const REQUEST_ID = 2;
    const INTERVAL = 3;
    const ALLOWED_CONFIRMATIONS = 4;
    const STEAMID = 5;
    const WEAK_TOKEN = 6;
    const AGREEMENT_SESSION_URL = 7;
    const EXTENDED_ERROR_MESSAGE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_ID => array(
            'name' => 'client_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_ID => array(
            'name' => 'request_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INTERVAL => array(
            'name' => 'interval',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::ALLOWED_CONFIRMATIONS => array(
            'name' => 'allowed_confirmations',
            'repeated' => true,
            'type' => CAuthentication_AllowedConfirmation::class
        ),
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEAK_TOKEN => array(
            'name' => 'weak_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AGREEMENT_SESSION_URL => array(
            'name' => 'agreement_session_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTENDED_ERROR_MESSAGE => array(
            'name' => 'extended_error_message',
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
        $this->values[self::CLIENT_ID] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::INTERVAL] = null;
        $this->values[self::ALLOWED_CONFIRMATIONS] = array();
        $this->values[self::STEAMID] = null;
        $this->values[self::WEAK_TOKEN] = null;
        $this->values[self::AGREEMENT_SESSION_URL] = null;
        $this->values[self::EXTENDED_ERROR_MESSAGE] = null;
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
     * Sets value of 'client_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENT_ID, $value);
    }

    /**
     * Returns value of 'client_id' property
     *
     * @return integer
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENT_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'client_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENT_ID) !== null;
    }

    /**
     * Sets value of 'request_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRequestId($value)
    {
        return $this->set(self::REQUEST_ID, $value);
    }

    /**
     * Returns value of 'request_id' property
     *
     * @return string
     */
    public function getRequestId()
    {
        $value = $this->get(self::REQUEST_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'request_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestId()
    {
        return $this->get(self::REQUEST_ID) !== null;
    }

    /**
     * Sets value of 'interval' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setInterval($value)
    {
        return $this->set(self::INTERVAL, $value);
    }

    /**
     * Returns value of 'interval' property
     *
     * @return double
     */
    public function getInterval()
    {
        $value = $this->get(self::INTERVAL);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'interval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInterval()
    {
        return $this->get(self::INTERVAL) !== null;
    }

    /**
     * Appends value to 'allowed_confirmations' list
     *
     * @param CAuthentication_AllowedConfirmation $value Value to append
     *
     * @return null
     */
    public function appendAllowedConfirmations(CAuthentication_AllowedConfirmation $value)
    {
        return $this->append(self::ALLOWED_CONFIRMATIONS, $value);
    }

    /**
     * Clears 'allowed_confirmations' list
     *
     * @return null
     */
    public function clearAllowedConfirmations()
    {
        return $this->clear(self::ALLOWED_CONFIRMATIONS);
    }

    /**
     * Returns 'allowed_confirmations' list
     *
     * @return CAuthentication_AllowedConfirmation[]
     */
    public function getAllowedConfirmations()
    {
        return $this->get(self::ALLOWED_CONFIRMATIONS);
    }

    /**
     * Returns true if 'allowed_confirmations' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllowedConfirmations()
    {
        return count($this->get(self::ALLOWED_CONFIRMATIONS)) !== 0;
    }

    /**
     * Returns 'allowed_confirmations' iterator
     *
     * @return \ArrayIterator
     */
    public function getAllowedConfirmationsIterator()
    {
        return new \ArrayIterator($this->get(self::ALLOWED_CONFIRMATIONS));
    }

    /**
     * Returns element from 'allowed_confirmations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CAuthentication_AllowedConfirmation
     */
    public function getAllowedConfirmationsAt($offset)
    {
        return $this->get(self::ALLOWED_CONFIRMATIONS, $offset);
    }

    /**
     * Returns count of 'allowed_confirmations' list
     *
     * @return int
     */
    public function getAllowedConfirmationsCount()
    {
        return $this->count(self::ALLOWED_CONFIRMATIONS);
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
     * Sets value of 'weak_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeakToken($value)
    {
        return $this->set(self::WEAK_TOKEN, $value);
    }

    /**
     * Returns value of 'weak_token' property
     *
     * @return string
     */
    public function getWeakToken()
    {
        $value = $this->get(self::WEAK_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'weak_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeakToken()
    {
        return $this->get(self::WEAK_TOKEN) !== null;
    }

    /**
     * Sets value of 'agreement_session_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAgreementSessionUrl($value)
    {
        return $this->set(self::AGREEMENT_SESSION_URL, $value);
    }

    /**
     * Returns value of 'agreement_session_url' property
     *
     * @return string
     */
    public function getAgreementSessionUrl()
    {
        $value = $this->get(self::AGREEMENT_SESSION_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'agreement_session_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAgreementSessionUrl()
    {
        return $this->get(self::AGREEMENT_SESSION_URL) !== null;
    }

    /**
     * Sets value of 'extended_error_message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExtendedErrorMessage($value)
    {
        return $this->set(self::EXTENDED_ERROR_MESSAGE, $value);
    }

    /**
     * Returns value of 'extended_error_message' property
     *
     * @return string
     */
    public function getExtendedErrorMessage()
    {
        $value = $this->get(self::EXTENDED_ERROR_MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'extended_error_message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtendedErrorMessage()
    {
        return $this->get(self::EXTENDED_ERROR_MESSAGE) !== null;
    }
}
}