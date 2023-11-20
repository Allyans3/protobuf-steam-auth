<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_GetAuthSessionInfo_Request message
 */
class CAuthentication_GetAuthSessionInfo_Request extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_ID => array(
            'name' => 'client_id',
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
        $this->values[self::CLIENT_ID] = null;
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
     * Sets value of 'client_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENT_ID, $value);
    }

    /**
     * Returns value of 'client_id' property
     *
     * @return integer
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENT_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'client_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENT_ID) !== null;
    }
}
}