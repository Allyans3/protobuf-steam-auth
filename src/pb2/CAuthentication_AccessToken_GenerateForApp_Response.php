<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_AccessToken_GenerateForApp_Response message
 */
class CAuthentication_AccessToken_GenerateForApp_Response extends \ProtobufMessage
{
    /* Field index constants */
    const ACCESS_TOKEN = 1;
    const REFRESH_TOKEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACCESS_TOKEN => array(
            'name' => 'access_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REFRESH_TOKEN => array(
            'name' => 'refresh_token',
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
        $this->values[self::ACCESS_TOKEN] = null;
        $this->values[self::REFRESH_TOKEN] = null;
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
     * Sets value of 'access_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccessToken($value)
    {
        return $this->set(self::ACCESS_TOKEN, $value);
    }

    /**
     * Returns value of 'access_token' property
     *
     * @return string
     */
    public function getAccessToken()
    {
        $value = $this->get(self::ACCESS_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'access_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccessToken()
    {
        return $this->get(self::ACCESS_TOKEN) !== null;
    }

    /**
     * Sets value of 'refresh_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRefreshToken($value)
    {
        return $this->set(self::REFRESH_TOKEN, $value);
    }

    /**
     * Returns value of 'refresh_token' property
     *
     * @return string
     */
    public function getRefreshToken()
    {
        $value = $this->get(self::REFRESH_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'refresh_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRefreshToken()
    {
        return $this->get(self::REFRESH_TOKEN) !== null;
    }
}
}