<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2022-12-01 11:15:30
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_PollAuthSessionStatus_Response message
 */
class CAuthentication_PollAuthSessionStatus_Response extends \ProtobufMessage
{
    /* Field index constants */
    const NEW_CLIENT_ID = 1;
    const NEW_CHALLENGE_URL = 2;
    const REFRESH_TOKEN = 3;
    const ACCESS_TOKEN = 4;
    const HAD_REMOTE_INTERACTION = 5;
    const ACCOUNT_NAME = 6;
    const NEW_GUARD_DATA = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEW_CLIENT_ID => array(
            'name' => 'new_client_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_CHALLENGE_URL => array(
            'name' => 'new_challenge_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REFRESH_TOKEN => array(
            'name' => 'refresh_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCESS_TOKEN => array(
            'name' => 'access_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HAD_REMOTE_INTERACTION => array(
            'name' => 'had_remote_interaction',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ACCOUNT_NAME => array(
            'name' => 'account_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NEW_GUARD_DATA => array(
            'name' => 'new_guard_data',
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
        $this->values[self::NEW_CLIENT_ID] = null;
        $this->values[self::NEW_CHALLENGE_URL] = null;
        $this->values[self::REFRESH_TOKEN] = null;
        $this->values[self::ACCESS_TOKEN] = null;
        $this->values[self::HAD_REMOTE_INTERACTION] = null;
        $this->values[self::ACCOUNT_NAME] = null;
        $this->values[self::NEW_GUARD_DATA] = null;
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
     * Sets value of 'new_client_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewClientId($value)
    {
        return $this->set(self::NEW_CLIENT_ID, $value);
    }

    /**
     * Returns value of 'new_client_id' property
     *
     * @return integer
     */
    public function getNewClientId()
    {
        $value = $this->get(self::NEW_CLIENT_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'new_client_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewClientId()
    {
        return $this->get(self::NEW_CLIENT_ID) !== null;
    }

    /**
     * Sets value of 'new_challenge_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewChallengeUrl($value)
    {
        return $this->set(self::NEW_CHALLENGE_URL, $value);
    }

    /**
     * Returns value of 'new_challenge_url' property
     *
     * @return string
     */
    public function getNewChallengeUrl()
    {
        $value = $this->get(self::NEW_CHALLENGE_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'new_challenge_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewChallengeUrl()
    {
        return $this->get(self::NEW_CHALLENGE_URL) !== null;
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
     * Sets value of 'had_remote_interaction' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHadRemoteInteraction($value)
    {
        return $this->set(self::HAD_REMOTE_INTERACTION, $value);
    }

    /**
     * Returns value of 'had_remote_interaction' property
     *
     * @return boolean
     */
    public function getHadRemoteInteraction()
    {
        $value = $this->get(self::HAD_REMOTE_INTERACTION);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'had_remote_interaction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHadRemoteInteraction()
    {
        return $this->get(self::HAD_REMOTE_INTERACTION) !== null;
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
     * Sets value of 'new_guard_data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewGuardData($value)
    {
        return $this->set(self::NEW_GUARD_DATA, $value);
    }

    /**
     * Returns value of 'new_guard_data' property
     *
     * @return string
     */
    public function getNewGuardData()
    {
        $value = $this->get(self::NEW_GUARD_DATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'new_guard_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewGuardData()
    {
        return $this->get(self::NEW_GUARD_DATA) !== null;
    }
}
}