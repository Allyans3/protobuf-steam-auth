<?php
/**
 * Auto generated from service_phone.proto at 2023-07-08 17:11:23
 */

namespace SteamAuth\pb2\CPhone {
/**
 * CPhone_ConfirmAddPhoneToAccount_Request message
 */
class CPhone_ConfirmAddPhoneToAccount_Request extends \ProtobufMessage
{
    /* Field index constants */
    const STEAMID = 1;
    const STOKEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::STOKEN => array(
            'name' => 'stoken',
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
        $this->values[self::STEAMID] = null;
        $this->values[self::STOKEN] = null;
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
     * Sets value of 'stoken' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoken($value)
    {
        return $this->set(self::STOKEN, $value);
    }

    /**
     * Returns value of 'stoken' property
     *
     * @return string
     */
    public function getStoken()
    {
        $value = $this->get(self::STOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'stoken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStoken()
    {
        return $this->get(self::STOKEN) !== null;
    }
}
}