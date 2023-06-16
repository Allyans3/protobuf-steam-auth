<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_UpdateAuthSessionWithSteamGuardCode_Response message
 */
class CAuthentication_UpdateAuthSessionWithSteamGuardCode_Response extends \ProtobufMessage
{
    /* Field index constants */
    const AGREEMENT_SESSION_URL = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AGREEMENT_SESSION_URL => array(
            'name' => 'agreement_session_url',
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
        $this->values[self::AGREEMENT_SESSION_URL] = null;
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
}
}