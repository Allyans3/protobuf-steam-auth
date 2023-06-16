<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * ContentDescriptor message embedded in UserContentDescriptorPreferences message
 */
class UserContentDescriptorPreferences_ContentDescriptor extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT_DESCRIPTORID = 1;
    const TIMESTAMP_ADDED = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT_DESCRIPTORID => array(
            'name' => 'content_descriptorid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMESTAMP_ADDED => array(
            'name' => 'timestamp_added',
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
        $this->values[self::CONTENT_DESCRIPTORID] = null;
        $this->values[self::TIMESTAMP_ADDED] = null;
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
     * Sets value of 'content_descriptorid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContentDescriptorid($value)
    {
        return $this->set(self::CONTENT_DESCRIPTORID, $value);
    }

    /**
     * Returns value of 'content_descriptorid' property
     *
     * @return integer
     */
    public function getContentDescriptorid()
    {
        $value = $this->get(self::CONTENT_DESCRIPTORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'content_descriptorid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContentDescriptorid()
    {
        return $this->get(self::CONTENT_DESCRIPTORID) !== null;
    }

    /**
     * Sets value of 'timestamp_added' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestampAdded($value)
    {
        return $this->set(self::TIMESTAMP_ADDED, $value);
    }

    /**
     * Returns value of 'timestamp_added' property
     *
     * @return integer
     */
    public function getTimestampAdded()
    {
        $value = $this->get(self::TIMESTAMP_ADDED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestamp_added' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestampAdded()
    {
        return $this->get(self::TIMESTAMP_ADDED) !== null;
    }
}
}