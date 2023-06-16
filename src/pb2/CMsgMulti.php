<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CMsgMulti message
 */
class CMsgMulti extends \ProtobufMessage
{
    /* Field index constants */
    const SIZE_UNZIPPED = 1;
    const MESSAGE_BODY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIZE_UNZIPPED => array(
            'name' => 'size_unzipped',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::SIZE_UNZIPPED] = null;
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
     * Sets value of 'size_unzipped' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSizeUnzipped($value)
    {
        return $this->set(self::SIZE_UNZIPPED, $value);
    }

    /**
     * Returns value of 'size_unzipped' property
     *
     * @return integer
     */
    public function getSizeUnzipped()
    {
        $value = $this->get(self::SIZE_UNZIPPED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'size_unzipped' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSizeUnzipped()
    {
        return $this->get(self::SIZE_UNZIPPED) !== null;
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