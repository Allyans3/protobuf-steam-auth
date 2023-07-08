<?php
/**
 * Auto generated from service_twofactor.proto at 2023-07-08 08:31:13
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_RemoveAuthenticatorViaChallengeStart_Response message
 */
class CTwoFactor_RemoveAuthenticatorViaChallengeStart_Response extends \ProtobufMessage
{
    /* Field index constants */
    const SUCCESS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUCCESS => array(
            'name' => 'success',
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
        $this->values[self::SUCCESS] = null;
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
}
}