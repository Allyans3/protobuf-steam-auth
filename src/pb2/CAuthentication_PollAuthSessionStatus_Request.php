<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_PollAuthSessionStatus_Request message
 */
class CAuthentication_PollAuthSessionStatus_Request extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_ID = 1;
    const REQUEST_ID = 2;
    const TOKEN_TO_REVOKE = 3;

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
        self::TOKEN_TO_REVOKE => array(
            'name' => 'token_to_revoke',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
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
        $this->values[self::TOKEN_TO_REVOKE] = null;
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
     * Sets value of 'token_to_revoke' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenToRevoke($value)
    {
        return $this->set(self::TOKEN_TO_REVOKE, $value);
    }

    /**
     * Returns value of 'token_to_revoke' property
     *
     * @return integer
     */
    public function getTokenToRevoke()
    {
        $value = $this->get(self::TOKEN_TO_REVOKE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_to_revoke' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenToRevoke()
    {
        return $this->get(self::TOKEN_TO_REVOKE) !== null;
    }
}
}