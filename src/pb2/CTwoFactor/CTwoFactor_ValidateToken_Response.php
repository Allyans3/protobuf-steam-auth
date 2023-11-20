<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_ValidateToken_Response message
 */
class CTwoFactor_ValidateToken_Response extends \ProtobufMessage
{
    /* Field index constants */
    const VALID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VALID => array(
            'name' => 'valid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::VALID] = null;
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
     * Sets value of 'valid' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setValid($value)
    {
        return $this->set(self::VALID, $value);
    }

    /**
     * Returns value of 'valid' property
     *
     * @return boolean
     */
    public function getValid()
    {
        $value = $this->get(self::VALID);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'valid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValid()
    {
        return $this->get(self::VALID) !== null;
    }
}
}