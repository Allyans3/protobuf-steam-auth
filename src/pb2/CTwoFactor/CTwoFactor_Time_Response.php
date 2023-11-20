<?php
/**
 * Auto generated from service_twofactor.proto at 2023-11-20 10:28:26
 */

namespace SteamAuth\pb2\CTwoFactor {
/**
 * CTwoFactor_Time_Response message
 */
class CTwoFactor_Time_Response extends \ProtobufMessage
{
    /* Field index constants */
    const SERVER_TIME = 1;
    const SKEW_TOLERANCE_SECONDS = 2;
    const LARGE_TIME_JINK = 3;
    const PROBE_FREQUENCY_SECONDS = 4;
    const ADJUSTED_TIME_PROBE_FREQUENCY_SECONDS = 5;
    const HINT_PROBE_FREQUENCY_SECONDS = 6;
    const SYNC_TIMEOUT = 7;
    const TRY_AGAIN_SECONDS = 8;
    const MAX_ATTEMPTS = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVER_TIME => array(
            'name' => 'server_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SKEW_TOLERANCE_SECONDS => array(
            'name' => 'skew_tolerance_seconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LARGE_TIME_JINK => array(
            'name' => 'large_time_jink',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROBE_FREQUENCY_SECONDS => array(
            'name' => 'probe_frequency_seconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADJUSTED_TIME_PROBE_FREQUENCY_SECONDS => array(
            'name' => 'adjusted_time_probe_frequency_seconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HINT_PROBE_FREQUENCY_SECONDS => array(
            'name' => 'hint_probe_frequency_seconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYNC_TIMEOUT => array(
            'name' => 'sync_timeout',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TRY_AGAIN_SECONDS => array(
            'name' => 'try_again_seconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_ATTEMPTS => array(
            'name' => 'max_attempts',
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
        $this->values[self::SERVER_TIME] = null;
        $this->values[self::SKEW_TOLERANCE_SECONDS] = null;
        $this->values[self::LARGE_TIME_JINK] = null;
        $this->values[self::PROBE_FREQUENCY_SECONDS] = null;
        $this->values[self::ADJUSTED_TIME_PROBE_FREQUENCY_SECONDS] = null;
        $this->values[self::HINT_PROBE_FREQUENCY_SECONDS] = null;
        $this->values[self::SYNC_TIMEOUT] = null;
        $this->values[self::TRY_AGAIN_SECONDS] = null;
        $this->values[self::MAX_ATTEMPTS] = null;
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
     * Sets value of 'server_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServerTime($value)
    {
        return $this->set(self::SERVER_TIME, $value);
    }

    /**
     * Returns value of 'server_time' property
     *
     * @return integer
     */
    public function getServerTime()
    {
        $value = $this->get(self::SERVER_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'server_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerTime()
    {
        return $this->get(self::SERVER_TIME) !== null;
    }

    /**
     * Sets value of 'skew_tolerance_seconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSkewToleranceSeconds($value)
    {
        return $this->set(self::SKEW_TOLERANCE_SECONDS, $value);
    }

    /**
     * Returns value of 'skew_tolerance_seconds' property
     *
     * @return integer
     */
    public function getSkewToleranceSeconds()
    {
        $value = $this->get(self::SKEW_TOLERANCE_SECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'skew_tolerance_seconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSkewToleranceSeconds()
    {
        return $this->get(self::SKEW_TOLERANCE_SECONDS) !== null;
    }

    /**
     * Sets value of 'large_time_jink' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLargeTimeJink($value)
    {
        return $this->set(self::LARGE_TIME_JINK, $value);
    }

    /**
     * Returns value of 'large_time_jink' property
     *
     * @return integer
     */
    public function getLargeTimeJink()
    {
        $value = $this->get(self::LARGE_TIME_JINK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'large_time_jink' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLargeTimeJink()
    {
        return $this->get(self::LARGE_TIME_JINK) !== null;
    }

    /**
     * Sets value of 'probe_frequency_seconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProbeFrequencySeconds($value)
    {
        return $this->set(self::PROBE_FREQUENCY_SECONDS, $value);
    }

    /**
     * Returns value of 'probe_frequency_seconds' property
     *
     * @return integer
     */
    public function getProbeFrequencySeconds()
    {
        $value = $this->get(self::PROBE_FREQUENCY_SECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'probe_frequency_seconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProbeFrequencySeconds()
    {
        return $this->get(self::PROBE_FREQUENCY_SECONDS) !== null;
    }

    /**
     * Sets value of 'adjusted_time_probe_frequency_seconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdjustedTimeProbeFrequencySeconds($value)
    {
        return $this->set(self::ADJUSTED_TIME_PROBE_FREQUENCY_SECONDS, $value);
    }

    /**
     * Returns value of 'adjusted_time_probe_frequency_seconds' property
     *
     * @return integer
     */
    public function getAdjustedTimeProbeFrequencySeconds()
    {
        $value = $this->get(self::ADJUSTED_TIME_PROBE_FREQUENCY_SECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'adjusted_time_probe_frequency_seconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdjustedTimeProbeFrequencySeconds()
    {
        return $this->get(self::ADJUSTED_TIME_PROBE_FREQUENCY_SECONDS) !== null;
    }

    /**
     * Sets value of 'hint_probe_frequency_seconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHintProbeFrequencySeconds($value)
    {
        return $this->set(self::HINT_PROBE_FREQUENCY_SECONDS, $value);
    }

    /**
     * Returns value of 'hint_probe_frequency_seconds' property
     *
     * @return integer
     */
    public function getHintProbeFrequencySeconds()
    {
        $value = $this->get(self::HINT_PROBE_FREQUENCY_SECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hint_probe_frequency_seconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHintProbeFrequencySeconds()
    {
        return $this->get(self::HINT_PROBE_FREQUENCY_SECONDS) !== null;
    }

    /**
     * Sets value of 'sync_timeout' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSyncTimeout($value)
    {
        return $this->set(self::SYNC_TIMEOUT, $value);
    }

    /**
     * Returns value of 'sync_timeout' property
     *
     * @return integer
     */
    public function getSyncTimeout()
    {
        $value = $this->get(self::SYNC_TIMEOUT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sync_timeout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSyncTimeout()
    {
        return $this->get(self::SYNC_TIMEOUT) !== null;
    }

    /**
     * Sets value of 'try_again_seconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTryAgainSeconds($value)
    {
        return $this->set(self::TRY_AGAIN_SECONDS, $value);
    }

    /**
     * Returns value of 'try_again_seconds' property
     *
     * @return integer
     */
    public function getTryAgainSeconds()
    {
        $value = $this->get(self::TRY_AGAIN_SECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'try_again_seconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTryAgainSeconds()
    {
        return $this->get(self::TRY_AGAIN_SECONDS) !== null;
    }

    /**
     * Sets value of 'max_attempts' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxAttempts($value)
    {
        return $this->set(self::MAX_ATTEMPTS, $value);
    }

    /**
     * Returns value of 'max_attempts' property
     *
     * @return integer
     */
    public function getMaxAttempts()
    {
        $value = $this->get(self::MAX_ATTEMPTS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'max_attempts' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxAttempts()
    {
        return $this->get(self::MAX_ATTEMPTS) !== null;
    }
}
}