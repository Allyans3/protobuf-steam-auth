<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_GetPasswordRSAPublicKey_Request message
 */
class CAuthentication_GetPasswordRSAPublicKey_Request extends \ProtobufMessage
{
    /* Field index constants */
    const ACCOUNT_NAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACCOUNT_NAME => array(
            'name' => 'account_name',
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
        $this->values[self::ACCOUNT_NAME] = null;
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
     * Sets value of 'account_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccountName($value)
    {
        return $this->set(self::ACCOUNT_NAME, $value);
    }

    /**
     * Returns value of 'account_name' property
     *
     * @return string
     */
    public function getAccountName()
    {
        $value = $this->get(self::ACCOUNT_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'account_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccountName()
    {
        return $this->get(self::ACCOUNT_NAME) !== null;
    }
}
}