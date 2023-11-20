<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_BeginAuthSessionViaQR_Response message
 */
class CAuthentication_BeginAuthSessionViaQR_Response extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_ID = 1;
    const CHALLENGE_URL = 2;
    const REQUEST_ID = 3;
    const INTERVAL = 4;
    const ALLOWED_CONFIRMATIONS = 5;
    const VERSION = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_ID => array(
            'name' => 'client_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHALLENGE_URL => array(
            'name' => 'challenge_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::CLIENT_ID] = null;
        $this->values[self::CHALLENGE_URL] = null;
        $this->values[self::REQUEST_ID] = null;
        $this->values[self::INTERVAL] = null;
        $this->values[self::ALLOWED_CONFIRMATIONS] = array();
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
     * Sets value of 'challenge_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChallengeUrl($value)
    {
        return $this->set(self::CHALLENGE_URL, $value);
    }

    /**
     * Returns value of 'challenge_url' property
     *
     * @return string
     */
    public function getChallengeUrl()
    {
        $value = $this->get(self::CHALLENGE_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'challenge_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChallengeUrl()
    {
        return $this->get(self::CHALLENGE_URL) !== null;
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