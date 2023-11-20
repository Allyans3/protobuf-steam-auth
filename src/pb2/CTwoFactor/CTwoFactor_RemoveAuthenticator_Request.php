<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_RemoveAuthenticator_Request message
 */
class CTwoFactor_RemoveAuthenticator_Request extends \ProtobufMessage
{
    /* Field index constants */
    const REVOCATION_CODE = 2;
    const REVOCATION_REASON = 5;
    const STEAMGUARD_SCHEME = 6;
    const REMOVE_ALL_STEAMGUARD_COOKIES = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REVOCATION_CODE => array(
            'name' => 'revocation_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVOCATION_REASON => array(
            'name' => 'revocation_reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STEAMGUARD_SCHEME => array(
            'name' => 'steamguard_scheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMOVE_ALL_STEAMGUARD_COOKIES => array(
            'name' => 'remove_all_steamguard_cookies',
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
        $this->values[self::REVOCATION_CODE] = null;
        $this->values[self::REVOCATION_REASON] = null;
        $this->values[self::STEAMGUARD_SCHEME] = null;
        $this->values[self::REMOVE_ALL_STEAMGUARD_COOKIES] = null;
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
     * Sets value of 'revocation_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevocationCode($value)
    {
        return $this->set(self::REVOCATION_CODE, $value);
    }

    /**
     * Returns value of 'revocation_code' property
     *
     * @return string
     */
    public function getRevocationCode()
    {
        $value = $this->get(self::REVOCATION_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'revocation_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRevocationCode()
    {
        return $this->get(self::REVOCATION_CODE) !== null;
    }

    /**
     * Sets value of 'revocation_reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRevocationReason($value)
    {
        return $this->set(self::REVOCATION_REASON, $value);
    }

    /**
     * Returns value of 'revocation_reason' property
     *
     * @return integer
     */
    public function getRevocationReason()
    {
        $value = $this->get(self::REVOCATION_REASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'revocation_reason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRevocationReason()
    {
        return $this->get(self::REVOCATION_REASON) !== null;
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
     * Sets value of 'remove_all_steamguard_cookies' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setRemoveAllSteamguardCookies($value)
    {
        return $this->set(self::REMOVE_ALL_STEAMGUARD_COOKIES, $value);
    }

    /**
     * Returns value of 'remove_all_steamguard_cookies' property
     *
     * @return boolean
     */
    public function getRemoveAllSteamguardCookies()
    {
        $value = $this->get(self::REMOVE_ALL_STEAMGUARD_COOKIES);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'remove_all_steamguard_cookies' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemoveAllSteamguardCookies()
    {
        return $this->get(self::REMOVE_ALL_STEAMGUARD_COOKIES) !== null;
    }
}
}