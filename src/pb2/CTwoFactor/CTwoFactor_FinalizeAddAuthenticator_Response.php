<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_FinalizeAddAuthenticator_Response message
 */
class CTwoFactor_FinalizeAddAuthenticator_Response extends \ProtobufMessage
{
    /* Field index constants */
    const SUCCESS = 1;
    const WANT_MORE = 2;
    const SERVER_TIME = 3;
    const STATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUCCESS => array(
            'name' => 'success',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::WANT_MORE => array(
            'name' => 'want_more',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SERVER_TIME => array(
            'name' => 'server_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATUS => array(
            'name' => 'status',
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
        $this->values[self::SUCCESS] = null;
        $this->values[self::WANT_MORE] = null;
        $this->values[self::SERVER_TIME] = null;
        $this->values[self::STATUS] = null;
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
     * Sets value of 'success' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSuccess($value)
    {
        return $this->set(self::SUCCESS, $value);
    }

    /**
     * Returns value of 'success' property
     *
     * @return boolean
     */
    public function getSuccess()
    {
        $value = $this->get(self::SUCCESS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'success' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSuccess()
    {
        return $this->get(self::SUCCESS) !== null;
    }

    /**
     * Sets value of 'want_more' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setWantMore($value)
    {
        return $this->set(self::WANT_MORE, $value);
    }

    /**
     * Returns value of 'want_more' property
     *
     * @return boolean
     */
    public function getWantMore()
    {
        $value = $this->get(self::WANT_MORE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'want_more' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWantMore()
    {
        return $this->get(self::WANT_MORE) !== null;
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
}
}