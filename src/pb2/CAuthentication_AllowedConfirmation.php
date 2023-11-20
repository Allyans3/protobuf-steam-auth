<?php
/**
 * Auto generated from steammessages_auth.steamclient.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CAuthentication_AllowedConfirmation message
 */
class CAuthentication_AllowedConfirmation extends \ProtobufMessage
{
    /* Field index constants */
    const CONFIRMATION_TYPE = 1;
    const ASSOCIATED_MESSAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFIRMATION_TYPE => array(
            'default' => EAuthSessionGuardType::k_EAuthSessionGuardType_Unknown,
            'name' => 'confirmation_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSOCIATED_MESSAGE => array(
            'name' => 'associated_message',
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
        $this->values[self::CONFIRMATION_TYPE] = self::$fields[self::CONFIRMATION_TYPE]['default'];
        $this->values[self::ASSOCIATED_MESSAGE] = null;
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
     * Sets value of 'confirmation_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfirmationType($value)
    {
        return $this->set(self::CONFIRMATION_TYPE, $value);
    }

    /**
     * Returns value of 'confirmation_type' property
     *
     * @return integer
     */
    public function getConfirmationType()
    {
        $value = $this->get(self::CONFIRMATION_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confirmation_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfirmationType()
    {
        return $this->get(self::CONFIRMATION_TYPE) !== null;
    }

    /**
     * Sets value of 'associated_message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAssociatedMessage($value)
    {
        return $this->set(self::ASSOCIATED_MESSAGE, $value);
    }

    /**
     * Returns value of 'associated_message' property
     *
     * @return string
     */
    public function getAssociatedMessage()
    {
        $value = $this->get(self::ASSOCIATED_MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'associated_message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAssociatedMessage()
    {
        return $this->get(self::ASSOCIATED_MESSAGE) !== null;
    }
}
}