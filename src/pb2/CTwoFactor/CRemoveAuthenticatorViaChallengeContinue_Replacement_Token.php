<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CRemoveAuthenticatorViaChallengeContinue_Replacement_Token message
 */
class CRemoveAuthenticatorViaChallengeContinue_Replacement_Token extends \ProtobufMessage
{
    /* Field index constants */
    const SHARED_SECRET = 1;
    const SERIAL_NUMBER = 2;
    const REVOCATION_CODE = 3;
    const URI = 4;
    const SERVER_TIME = 5;
    const ACCOUNT_NAME = 6;
    const TOKEN_GID = 7;
    const IDENTITY_SECRET = 8;
    const SECRET_1 = 9;
    const STATUS = 10;
    const STEAMGUARD_SCHEME = 11;
    const STEAMID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SHARED_SECRET => array(
            'name' => 'shared_secret',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SERIAL_NUMBER => array(
            'name' => 'serial_number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::REVOCATION_CODE => array(
            'name' => 'revocation_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::URI => array(
            'name' => 'uri',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SERVER_TIME => array(
            'name' => 'server_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACCOUNT_NAME => array(
            'name' => 'account_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOKEN_GID => array(
            'name' => 'token_gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IDENTITY_SECRET => array(
            'name' => 'identity_secret',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SECRET_1 => array(
            'name' => 'secret_1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STEAMGUARD_SCHEME => array(
            'name' => 'steamguard_scheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STEAMID => array(
            'name' => 'steamid',
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
        $this->values[self::SHARED_SECRET] = null;
        $this->values[self::SERIAL_NUMBER] = null;
        $this->values[self::REVOCATION_CODE] = null;
        $this->values[self::URI] = null;
        $this->values[self::SERVER_TIME] = null;
        $this->values[self::ACCOUNT_NAME] = null;
        $this->values[self::TOKEN_GID] = null;
        $this->values[self::IDENTITY_SECRET] = null;
        $this->values[self::SECRET_1] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::STEAMGUARD_SCHEME] = null;
        $this->values[self::STEAMID] = null;
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
     * Sets value of 'shared_secret' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSharedSecret($value)
    {
        return $this->set(self::SHARED_SECRET, $value);
    }

    /**
     * Returns value of 'shared_secret' property
     *
     * @return string
     */
    public function getSharedSecret()
    {
        $value = $this->get(self::SHARED_SECRET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'shared_secret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSharedSecret()
    {
        return $this->get(self::SHARED_SECRET) !== null;
    }

    /**
     * Sets value of 'serial_number' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSerialNumber($value)
    {
        return $this->set(self::SERIAL_NUMBER, $value);
    }

    /**
     * Returns value of 'serial_number' property
     *
     * @return integer
     */
    public function getSerialNumber()
    {
        $value = $this->get(self::SERIAL_NUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serial_number' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSerialNumber()
    {
        return $this->get(self::SERIAL_NUMBER) !== null;
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
     * Sets value of 'uri' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUri($value)
    {
        return $this->set(self::URI, $value);
    }

    /**
     * Returns value of 'uri' property
     *
     * @return string
     */
    public function getUri()
    {
        $value = $this->get(self::URI);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'uri' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUri()
    {
        return $this->get(self::URI) !== null;
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
     * Sets value of 'identity_secret' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdentitySecret($value)
    {
        return $this->set(self::IDENTITY_SECRET, $value);
    }

    /**
     * Returns value of 'identity_secret' property
     *
     * @return string
     */
    public function getIdentitySecret()
    {
        $value = $this->get(self::IDENTITY_SECRET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'identity_secret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIdentitySecret()
    {
        return $this->get(self::IDENTITY_SECRET) !== null;
    }

    /**
     * Sets value of 'secret_1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSecret1($value)
    {
        return $this->set(self::SECRET_1, $value);
    }

    /**
     * Returns value of 'secret_1' property
     *
     * @return string
     */
    public function getSecret1()
    {
        $value = $this->get(self::SECRET_1);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'secret_1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSecret1()
    {
        return $this->get(self::SECRET_1) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
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
}
}