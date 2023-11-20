<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CMsgProtobufWrapped message
 */
class CMsgProtobufWrapped extends \ProtobufMessage
{
    /* Field index constants */
    const MESSAGE_BODY = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGE_BODY => array(
            'name' => 'message_body',
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
        $this->values[self::MESSAGE_BODY] = null;
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
     * Sets value of 'message_body' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageBody($value)
    {
        return $this->set(self::MESSAGE_BODY, $value);
    }

    /**
     * Returns value of 'message_body' property
     *
     * @return string
     */
    public function getMessageBody()
    {
        $value = $this->get(self::MESSAGE_BODY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'message_body' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageBody()
    {
        return $this->get(self::MESSAGE_BODY) !== null;
    }
}
}