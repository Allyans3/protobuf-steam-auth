<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CLocalizationToken message
 */
class CLocalizationToken extends \ProtobufMessage
{
    /* Field index constants */
    const LANGUAGE = 1;
    const LOCALIZED_STRING = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LANGUAGE => array(
            'name' => 'language',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCALIZED_STRING => array(
            'name' => 'localized_string',
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
        $this->values[self::LANGUAGE] = null;
        $this->values[self::LOCALIZED_STRING] = null;
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
     * Sets value of 'language' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'language' property
     *
     * @return integer
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
    }

    /**
     * Sets value of 'localized_string' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocalizedString($value)
    {
        return $this->set(self::LOCALIZED_STRING, $value);
    }

    /**
     * Returns value of 'localized_string' property
     *
     * @return string
     */
    public function getLocalizedString()
    {
        $value = $this->get(self::LOCALIZED_STRING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'localized_string' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocalizedString()
    {
        return $this->get(self::LOCALIZED_STRING) !== null;
    }
}
}