<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_RefreshToken_Revoke_Request message
 */
class CAuthentication_RefreshToken_Revoke_Request extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN_ID = 1;
    const STEAMID = 2;
    const REVOKE_ACTION = 3;
    const SIGNATURE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN_ID => array(
            'name' => 'token_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::REVOKE_ACTION => array(
            'default' => EAuthTokenRevokeAction::k_EAuthTokenRevokePermanent,
            'name' => 'revoke_action',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
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
        $this->values[self::TOKEN_ID] = null;
        $this->values[self::STEAMID] = null;
        $this->values[self::REVOKE_ACTION] = self::$fields[self::REVOKE_ACTION]['default'];
        $this->values[self::SIGNATURE] = null;
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
     * Sets value of 'token_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenId($value)
    {
        return $this->set(self::TOKEN_ID, $value);
    }

    /**
     * Returns value of 'token_id' property
     *
     * @return integer
     */
    public function getTokenId()
    {
        $value = $this->get(self::TOKEN_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenId()
    {
        return $this->get(self::TOKEN_ID) !== null;
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
     * Sets value of 'revoke_action' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRevokeAction($value)
    {
        return $this->set(self::REVOKE_ACTION, $value);
    }

    /**
     * Returns value of 'revoke_action' property
     *
     * @return integer
     */
    public function getRevokeAction()
    {
        $value = $this->get(self::REVOKE_ACTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'revoke_action' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRevokeAction()
    {
        return $this->get(self::REVOKE_ACTION) !== null;
    }

    /**
     * Sets value of 'signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }
}
}