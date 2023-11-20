<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CPackageReservationStatus message
 */
class CPackageReservationStatus extends \ProtobufMessage
{
    /* Field index constants */
    const PACKAGEID = 1;
    const RESERVATION_STATE = 2;
    const QUEUE_POSITION = 3;
    const TOTAL_QUEUE_SIZE = 4;
    const RESERVATION_COUNTRY_CODE = 5;
    const EXPIRED = 6;
    const TIME_EXPIRES = 7;
    const TIME_RESERVED = 8;
    const RTIME_ESTIMATED_NOTIFICATION = 9;
    const NOTIFICATON_TOKEN = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PACKAGEID => array(
            'name' => 'packageid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESERVATION_STATE => array(
            'name' => 'reservation_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::QUEUE_POSITION => array(
            'name' => 'queue_position',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTAL_QUEUE_SIZE => array(
            'name' => 'total_queue_size',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESERVATION_COUNTRY_CODE => array(
            'name' => 'reservation_country_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXPIRED => array(
            'name' => 'expired',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TIME_EXPIRES => array(
            'name' => 'time_expires',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME_RESERVED => array(
            'name' => 'time_reserved',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RTIME_ESTIMATED_NOTIFICATION => array(
            'name' => 'rtime_estimated_notification',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOTIFICATON_TOKEN => array(
            'name' => 'notificaton_token',
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
        $this->values[self::PACKAGEID] = null;
        $this->values[self::RESERVATION_STATE] = null;
        $this->values[self::QUEUE_POSITION] = null;
        $this->values[self::TOTAL_QUEUE_SIZE] = null;
        $this->values[self::RESERVATION_COUNTRY_CODE] = null;
        $this->values[self::EXPIRED] = null;
        $this->values[self::TIME_EXPIRES] = null;
        $this->values[self::TIME_RESERVED] = null;
        $this->values[self::RTIME_ESTIMATED_NOTIFICATION] = null;
        $this->values[self::NOTIFICATON_TOKEN] = null;
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
     * Sets value of 'packageid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPackageid($value)
    {
        return $this->set(self::PACKAGEID, $value);
    }

    /**
     * Returns value of 'packageid' property
     *
     * @return integer
     */
    public function getPackageid()
    {
        $value = $this->get(self::PACKAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'packageid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPackageid()
    {
        return $this->get(self::PACKAGEID) !== null;
    }

    /**
     * Sets value of 'reservation_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReservationState($value)
    {
        return $this->set(self::RESERVATION_STATE, $value);
    }

    /**
     * Returns value of 'reservation_state' property
     *
     * @return integer
     */
    public function getReservationState()
    {
        $value = $this->get(self::RESERVATION_STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reservation_state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReservationState()
    {
        return $this->get(self::RESERVATION_STATE) !== null;
    }

    /**
     * Sets value of 'queue_position' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQueuePosition($value)
    {
        return $this->set(self::QUEUE_POSITION, $value);
    }

    /**
     * Returns value of 'queue_position' property
     *
     * @return integer
     */
    public function getQueuePosition()
    {
        $value = $this->get(self::QUEUE_POSITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'queue_position' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQueuePosition()
    {
        return $this->get(self::QUEUE_POSITION) !== null;
    }

    /**
     * Sets value of 'total_queue_size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalQueueSize($value)
    {
        return $this->set(self::TOTAL_QUEUE_SIZE, $value);
    }

    /**
     * Returns value of 'total_queue_size' property
     *
     * @return integer
     */
    public function getTotalQueueSize()
    {
        $value = $this->get(self::TOTAL_QUEUE_SIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'total_queue_size' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalQueueSize()
    {
        return $this->get(self::TOTAL_QUEUE_SIZE) !== null;
    }

    /**
     * Sets value of 'reservation_country_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReservationCountryCode($value)
    {
        return $this->set(self::RESERVATION_COUNTRY_CODE, $value);
    }

    /**
     * Returns value of 'reservation_country_code' property
     *
     * @return string
     */
    public function getReservationCountryCode()
    {
        $value = $this->get(self::RESERVATION_COUNTRY_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'reservation_country_code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReservationCountryCode()
    {
        return $this->get(self::RESERVATION_COUNTRY_CODE) !== null;
    }

    /**
     * Sets value of 'expired' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setExpired($value)
    {
        return $this->set(self::EXPIRED, $value);
    }

    /**
     * Returns value of 'expired' property
     *
     * @return boolean
     */
    public function getExpired()
    {
        $value = $this->get(self::EXPIRED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'expired' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpired()
    {
        return $this->get(self::EXPIRED) !== null;
    }

    /**
     * Sets value of 'time_expires' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeExpires($value)
    {
        return $this->set(self::TIME_EXPIRES, $value);
    }

    /**
     * Returns value of 'time_expires' property
     *
     * @return integer
     */
    public function getTimeExpires()
    {
        $value = $this->get(self::TIME_EXPIRES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time_expires' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeExpires()
    {
        return $this->get(self::TIME_EXPIRES) !== null;
    }

    /**
     * Sets value of 'time_reserved' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeReserved($value)
    {
        return $this->set(self::TIME_RESERVED, $value);
    }

    /**
     * Returns value of 'time_reserved' property
     *
     * @return integer
     */
    public function getTimeReserved()
    {
        $value = $this->get(self::TIME_RESERVED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time_reserved' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeReserved()
    {
        return $this->get(self::TIME_RESERVED) !== null;
    }

    /**
     * Sets value of 'rtime_estimated_notification' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRtimeEstimatedNotification($value)
    {
        return $this->set(self::RTIME_ESTIMATED_NOTIFICATION, $value);
    }

    /**
     * Returns value of 'rtime_estimated_notification' property
     *
     * @return integer
     */
    public function getRtimeEstimatedNotification()
    {
        $value = $this->get(self::RTIME_ESTIMATED_NOTIFICATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rtime_estimated_notification' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRtimeEstimatedNotification()
    {
        return $this->get(self::RTIME_ESTIMATED_NOTIFICATION) !== null;
    }

    /**
     * Sets value of 'notificaton_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNotificatonToken($value)
    {
        return $this->set(self::NOTIFICATON_TOKEN, $value);
    }

    /**
     * Returns value of 'notificaton_token' property
     *
     * @return string
     */
    public function getNotificatonToken()
    {
        $value = $this->get(self::NOTIFICATON_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'notificaton_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotificatonToken()
    {
        return $this->get(self::NOTIFICATON_TOKEN) !== null;
    }
}
}