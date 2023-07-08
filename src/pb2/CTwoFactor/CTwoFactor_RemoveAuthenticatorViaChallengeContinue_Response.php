<?php
/**
 * Auto generated from service_twofactor.proto at 2023-07-08 08:31:13
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_RemoveAuthenticatorViaChallengeContinue_Response message
 */
class CTwoFactor_RemoveAuthenticatorViaChallengeContinue_Response extends \ProtobufMessage
{
    /* Field index constants */
    const SUCCESS = 1;
    const REPLACEMENT_TOKEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUCCESS => array(
            'name' => 'success',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::REPLACEMENT_TOKEN => array(
            'name' => 'replacement_token',
            'required' => false,
            'type' => CRemoveAuthenticatorViaChallengeContinue_Replacement_Token::class
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
        $this->values[self::REPLACEMENT_TOKEN] = null;
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
     * Sets value of 'replacement_token' property
     *
     * @param CRemoveAuthenticatorViaChallengeContinue_Replacement_Token $value Property value
     *
     * @return null
     */
    public function setReplacementToken(CRemoveAuthenticatorViaChallengeContinue_Replacement_Token $value=null)
    {
        return $this->set(self::REPLACEMENT_TOKEN, $value);
    }

    /**
     * Returns value of 'replacement_token' property
     *
     * @return CRemoveAuthenticatorViaChallengeContinue_Replacement_Token
     */
    public function getReplacementToken()
    {
        return $this->get(self::REPLACEMENT_TOKEN);
    }

    /**
     * Returns true if 'replacement_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReplacementToken()
    {
        return $this->get(self::REPLACEMENT_TOKEN) !== null;
    }
}
}