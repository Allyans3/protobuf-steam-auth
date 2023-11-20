<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_Token_Revoke_Request message
 */
class CAuthentication_Token_Revoke_Request extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN = 1;
    const REVOKE_ACTION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN => array(
            'name' => 'token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVOKE_ACTION => array(
            'default' => EAuthTokenRevokeAction::k_EAuthTokenRevokePermanent,
            'name' => 'revoke_action',
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
        $this->values[self::TOKEN] = null;
        $this->values[self::REVOKE_ACTION] = self::$fields[self::REVOKE_ACTION]['default'];
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
     * Sets value of 'token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::TOKEN, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return string
     */
    public function getToken()
    {
        $value = $this->get(self::TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToken()
    {
        return $this->get(self::TOKEN) !== null;
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
}
}