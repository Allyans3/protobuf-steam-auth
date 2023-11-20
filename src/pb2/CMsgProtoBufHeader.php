<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CMsgProtoBufHeader message
 */
class CMsgProtoBufHeader extends \ProtobufMessage
{
    /* Field index constants */
    const STEAMID = 1;
    const CLIENT_SESSIONID = 2;
    const ROUTING_APPID = 3;
    const JOBID_SOURCE = 10;
    const JOBID_TARGET = 11;
    const TARGET_JOB_NAME = 12;
    const SEQ_NUM = 24;
    const ERESULT = 13;
    const ERROR_MESSAGE = 14;
    const AUTH_ACCOUNT_FLAGS = 16;
    const TOKEN_SOURCE = 22;
    const ADMIN_SPOOFING_USER = 23;
    const TRANSPORT_ERROR = 17;
    const MESSAGEID = 18;
    const PUBLISHER_GROUP_ID = 19;
    const SYSID = 20;
    const TRACE_TAG = 21;
    const WEBAPI_KEY_ID = 25;
    const IS_FROM_EXTERNAL_SOURCE = 26;
    const FORWARD_TO_SYSID = 27;
    const CM_SYSID = 28;
    const LAUNCHER_TYPE = 31;
    const REALM = 32;
    const TIMEOUT_MS = 33;
    const DEBUG_SOURCE = 34;
    const DEBUG_SOURCE_STRING_INDEX = 35;
    const TOKEN_ID = 36;
    const ROUTING_GC = 37;
    const SESSION_DISPOSITION = 38;
    const WG_TOKEN = 39;
    const WEBUI_AUTH_KEY = 40;
    const EXCLUDE_CLIENT_SESSIONIDS = 41;

    const IP = 15;
    const IP_V6 = 29;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STEAMID => array(
            'name' => 'steamid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::CLIENT_SESSIONID => array(
            'name' => 'client_sessionid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROUTING_APPID => array(
            'name' => 'routing_appid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::JOBID_SOURCE => array(
            'default' => 18446744073709551615,
            'name' => 'jobid_source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::JOBID_TARGET => array(
            'default' => 18446744073709551615,
            'name' => 'jobid_target',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::TARGET_JOB_NAME => array(
            'name' => 'target_job_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SEQ_NUM => array(
            'name' => 'seq_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERESULT => array(
            'default' => 2,
            'name' => 'eresult',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR_MESSAGE => array(
            'name' => 'error_message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTH_ACCOUNT_FLAGS => array(
            'name' => 'auth_account_flags',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOKEN_SOURCE => array(
            'name' => 'token_source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADMIN_SPOOFING_USER => array(
            'name' => 'admin_spoofing_user',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TRANSPORT_ERROR => array(
            'default' => 1,
            'name' => 'transport_error',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGEID => array(
            'default' => 18446744073709551615,
            'name' => 'messageid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PUBLISHER_GROUP_ID => array(
            'name' => 'publisher_group_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYSID => array(
            'name' => 'sysid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TRACE_TAG => array(
            'name' => 'trace_tag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEBAPI_KEY_ID => array(
            'name' => 'webapi_key_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IS_FROM_EXTERNAL_SOURCE => array(
            'name' => 'is_from_external_source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FORWARD_TO_SYSID => array(
            'name' => 'forward_to_sysid',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CM_SYSID => array(
            'name' => 'cm_sysid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LAUNCHER_TYPE => array(
            'default' => 0,
            'name' => 'launcher_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REALM => array(
            'default' => 0,
            'name' => 'realm',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMEOUT_MS => array(
            'default' => -1,
            'name' => 'timeout_ms',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEBUG_SOURCE => array(
            'name' => 'debug_source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEBUG_SOURCE_STRING_INDEX => array(
            'name' => 'debug_source_string_index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOKEN_ID => array(
            'name' => 'token_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROUTING_GC => array(
            'name' => 'routing_gc',
            'required' => false,
            'type' => CMsgGCRoutingProtoBufHeader::class
        ),
        self::SESSION_DISPOSITION => array(
            'default' => CMsgProtoBufHeader_ESessionDisposition::k_ESessionDispositionNormal,
            'name' => 'session_disposition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WG_TOKEN => array(
            'name' => 'wg_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WEBUI_AUTH_KEY => array(
            'name' => 'webui_auth_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXCLUDE_CLIENT_SESSIONIDS => array(
            'name' => 'exclude_client_sessionids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),

        self::IP => array(
            'name' => 'ip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IP_V6 => array(
            'name' => 'ip_v6',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING
        )
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
        $this->values[self::STEAMID] = null;
        $this->values[self::CLIENT_SESSIONID] = null;
        $this->values[self::ROUTING_APPID] = null;
        $this->values[self::JOBID_SOURCE] = self::$fields[self::JOBID_SOURCE]['default'];
        $this->values[self::JOBID_TARGET] = self::$fields[self::JOBID_TARGET]['default'];
        $this->values[self::TARGET_JOB_NAME] = null;
        $this->values[self::SEQ_NUM] = null;
        $this->values[self::ERESULT] = self::$fields[self::ERESULT]['default'];
        $this->values[self::ERROR_MESSAGE] = null;
        $this->values[self::AUTH_ACCOUNT_FLAGS] = null;
        $this->values[self::TOKEN_SOURCE] = null;
        $this->values[self::ADMIN_SPOOFING_USER] = null;
        $this->values[self::TRANSPORT_ERROR] = self::$fields[self::TRANSPORT_ERROR]['default'];
        $this->values[self::MESSAGEID] = self::$fields[self::MESSAGEID]['default'];
        $this->values[self::PUBLISHER_GROUP_ID] = null;
        $this->values[self::SYSID] = null;
        $this->values[self::TRACE_TAG] = null;
        $this->values[self::WEBAPI_KEY_ID] = null;
        $this->values[self::IS_FROM_EXTERNAL_SOURCE] = null;
        $this->values[self::FORWARD_TO_SYSID] = array();
        $this->values[self::CM_SYSID] = null;
        $this->values[self::LAUNCHER_TYPE] = self::$fields[self::LAUNCHER_TYPE]['default'];
        $this->values[self::REALM] = self::$fields[self::REALM]['default'];
        $this->values[self::TIMEOUT_MS] = self::$fields[self::TIMEOUT_MS]['default'];
        $this->values[self::DEBUG_SOURCE] = null;
        $this->values[self::DEBUG_SOURCE_STRING_INDEX] = null;
        $this->values[self::TOKEN_ID] = null;
        $this->values[self::ROUTING_GC] = null;
        $this->values[self::SESSION_DISPOSITION] = self::$fields[self::SESSION_DISPOSITION]['default'];
        $this->values[self::WG_TOKEN] = null;
        $this->values[self::WEBUI_AUTH_KEY] = null;
        $this->values[self::EXCLUDE_CLIENT_SESSIONIDS] = array();

        $this->values[self::IP] = null;
        $this->values[self::IP_V6] = null;
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
     * Sets value of 'steamid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSteamid($value)
    {
        return $this->set(self::STEAMID, $value);
    }

    /**
     * Returns value of 'steamid' property
     *
     * @return integer
     */
    public function getSteamid()
    {
        $value = $this->get(self::STEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'steamid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSteamid()
    {
        return $this->get(self::STEAMID) !== null;
    }

    /**
     * Sets value of 'client_sessionid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientSessionid($value)
    {
        return $this->set(self::CLIENT_SESSIONID, $value);
    }

    /**
     * Returns value of 'client_sessionid' property
     *
     * @return integer
     */
    public function getClientSessionid()
    {
        $value = $this->get(self::CLIENT_SESSIONID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'client_sessionid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientSessionid()
    {
        return $this->get(self::CLIENT_SESSIONID) !== null;
    }

    /**
     * Sets value of 'routing_appid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoutingAppid($value)
    {
        return $this->set(self::ROUTING_APPID, $value);
    }

    /**
     * Returns value of 'routing_appid' property
     *
     * @return integer
     */
    public function getRoutingAppid()
    {
        $value = $this->get(self::ROUTING_APPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'routing_appid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoutingAppid()
    {
        return $this->get(self::ROUTING_APPID) !== null;
    }

    /**
     * Sets value of 'jobid_source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setJobidSource($value)
    {
        return $this->set(self::JOBID_SOURCE, $value);
    }

    /**
     * Returns value of 'jobid_source' property
     *
     * @return integer
     */
    public function getJobidSource()
    {
        $value = $this->get(self::JOBID_SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'jobid_source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJobidSource()
    {
        return $this->get(self::JOBID_SOURCE) !== null;
    }

    /**
     * Sets value of 'jobid_target' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setJobidTarget($value)
    {
        return $this->set(self::JOBID_TARGET, $value);
    }

    /**
     * Returns value of 'jobid_target' property
     *
     * @return integer
     */
    public function getJobidTarget()
    {
        $value = $this->get(self::JOBID_TARGET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'jobid_target' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJobidTarget()
    {
        return $this->get(self::JOBID_TARGET) !== null;
    }

    /**
     * Sets value of 'target_job_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTargetJobName($value)
    {
        return $this->set(self::TARGET_JOB_NAME, $value);
    }

    /**
     * Returns value of 'target_job_name' property
     *
     * @return string
     */
    public function getTargetJobName()
    {
        $value = $this->get(self::TARGET_JOB_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'target_job_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTargetJobName()
    {
        return $this->get(self::TARGET_JOB_NAME) !== null;
    }

    /**
     * Sets value of 'seq_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSeqNum($value)
    {
        return $this->set(self::SEQ_NUM, $value);
    }

    /**
     * Returns value of 'seq_num' property
     *
     * @return integer
     */
    public function getSeqNum()
    {
        $value = $this->get(self::SEQ_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'seq_num' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeqNum()
    {
        return $this->get(self::SEQ_NUM) !== null;
    }

    /**
     * Sets value of 'eresult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEresult($value)
    {
        return $this->set(self::ERESULT, $value);
    }

    /**
     * Returns value of 'eresult' property
     *
     * @return integer
     */
    public function getEresult()
    {
        $value = $this->get(self::ERESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eresult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEresult()
    {
        return $this->get(self::ERESULT) !== null;
    }

    /**
     * Sets value of 'error_message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMessage($value)
    {
        return $this->set(self::ERROR_MESSAGE, $value);
    }

    /**
     * Returns value of 'error_message' property
     *
     * @return string
     */
    public function getErrorMessage()
    {
        $value = $this->get(self::ERROR_MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'error_message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorMessage()
    {
        return $this->get(self::ERROR_MESSAGE) !== null;
    }

    /**
     * Sets value of 'auth_account_flags' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthAccountFlags($value)
    {
        return $this->set(self::AUTH_ACCOUNT_FLAGS, $value);
    }

    /**
     * Returns value of 'auth_account_flags' property
     *
     * @return integer
     */
    public function getAuthAccountFlags()
    {
        $value = $this->get(self::AUTH_ACCOUNT_FLAGS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'auth_account_flags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthAccountFlags()
    {
        return $this->get(self::AUTH_ACCOUNT_FLAGS) !== null;
    }

    /**
     * Sets value of 'token_source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenSource($value)
    {
        return $this->set(self::TOKEN_SOURCE, $value);
    }

    /**
     * Returns value of 'token_source' property
     *
     * @return integer
     */
    public function getTokenSource()
    {
        $value = $this->get(self::TOKEN_SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenSource()
    {
        return $this->get(self::TOKEN_SOURCE) !== null;
    }

    /**
     * Sets value of 'admin_spoofing_user' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAdminSpoofingUser($value)
    {
        return $this->set(self::ADMIN_SPOOFING_USER, $value);
    }

    /**
     * Returns value of 'admin_spoofing_user' property
     *
     * @return boolean
     */
    public function getAdminSpoofingUser()
    {
        $value = $this->get(self::ADMIN_SPOOFING_USER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'admin_spoofing_user' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdminSpoofingUser()
    {
        return $this->get(self::ADMIN_SPOOFING_USER) !== null;
    }

    /**
     * Sets value of 'transport_error' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTransportError($value)
    {
        return $this->set(self::TRANSPORT_ERROR, $value);
    }

    /**
     * Returns value of 'transport_error' property
     *
     * @return integer
     */
    public function getTransportError()
    {
        $value = $this->get(self::TRANSPORT_ERROR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'transport_error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTransportError()
    {
        return $this->get(self::TRANSPORT_ERROR) !== null;
    }

    /**
     * Sets value of 'messageid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMessageid($value)
    {
        return $this->set(self::MESSAGEID, $value);
    }

    /**
     * Returns value of 'messageid' property
     *
     * @return integer
     */
    public function getMessageid()
    {
        $value = $this->get(self::MESSAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'messageid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageid()
    {
        return $this->get(self::MESSAGEID) !== null;
    }

    /**
     * Sets value of 'publisher_group_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPublisherGroupId($value)
    {
        return $this->set(self::PUBLISHER_GROUP_ID, $value);
    }

    /**
     * Returns value of 'publisher_group_id' property
     *
     * @return integer
     */
    public function getPublisherGroupId()
    {
        $value = $this->get(self::PUBLISHER_GROUP_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'publisher_group_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublisherGroupId()
    {
        return $this->get(self::PUBLISHER_GROUP_ID) !== null;
    }

    /**
     * Sets value of 'sysid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSysid($value)
    {
        return $this->set(self::SYSID, $value);
    }

    /**
     * Returns value of 'sysid' property
     *
     * @return integer
     */
    public function getSysid()
    {
        $value = $this->get(self::SYSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sysid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSysid()
    {
        return $this->get(self::SYSID) !== null;
    }

    /**
     * Sets value of 'trace_tag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTraceTag($value)
    {
        return $this->set(self::TRACE_TAG, $value);
    }

    /**
     * Returns value of 'trace_tag' property
     *
     * @return integer
     */
    public function getTraceTag()
    {
        $value = $this->get(self::TRACE_TAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'trace_tag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTraceTag()
    {
        return $this->get(self::TRACE_TAG) !== null;
    }

    /**
     * Sets value of 'webapi_key_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWebapiKeyId($value)
    {
        return $this->set(self::WEBAPI_KEY_ID, $value);
    }

    /**
     * Returns value of 'webapi_key_id' property
     *
     * @return integer
     */
    public function getWebapiKeyId()
    {
        $value = $this->get(self::WEBAPI_KEY_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'webapi_key_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWebapiKeyId()
    {
        return $this->get(self::WEBAPI_KEY_ID) !== null;
    }

    /**
     * Sets value of 'is_from_external_source' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsFromExternalSource($value)
    {
        return $this->set(self::IS_FROM_EXTERNAL_SOURCE, $value);
    }

    /**
     * Returns value of 'is_from_external_source' property
     *
     * @return boolean
     */
    public function getIsFromExternalSource()
    {
        $value = $this->get(self::IS_FROM_EXTERNAL_SOURCE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'is_from_external_source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsFromExternalSource()
    {
        return $this->get(self::IS_FROM_EXTERNAL_SOURCE) !== null;
    }

    /**
     * Appends value to 'forward_to_sysid' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendForwardToSysid($value)
    {
        return $this->append(self::FORWARD_TO_SYSID, $value);
    }

    /**
     * Clears 'forward_to_sysid' list
     *
     * @return null
     */
    public function clearForwardToSysid()
    {
        return $this->clear(self::FORWARD_TO_SYSID);
    }

    /**
     * Returns 'forward_to_sysid' list
     *
     * @return integer[]
     */
    public function getForwardToSysid()
    {
        return $this->get(self::FORWARD_TO_SYSID);
    }

    /**
     * Returns true if 'forward_to_sysid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasForwardToSysid()
    {
        return count($this->get(self::FORWARD_TO_SYSID)) !== 0;
    }

    /**
     * Returns 'forward_to_sysid' iterator
     *
     * @return \ArrayIterator
     */
    public function getForwardToSysidIterator()
    {
        return new \ArrayIterator($this->get(self::FORWARD_TO_SYSID));
    }

    /**
     * Returns element from 'forward_to_sysid' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getForwardToSysidAt($offset)
    {
        return $this->get(self::FORWARD_TO_SYSID, $offset);
    }

    /**
     * Returns count of 'forward_to_sysid' list
     *
     * @return int
     */
    public function getForwardToSysidCount()
    {
        return $this->count(self::FORWARD_TO_SYSID);
    }

    /**
     * Sets value of 'cm_sysid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmSysid($value)
    {
        return $this->set(self::CM_SYSID, $value);
    }

    /**
     * Returns value of 'cm_sysid' property
     *
     * @return integer
     */
    public function getCmSysid()
    {
        $value = $this->get(self::CM_SYSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cm_sysid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmSysid()
    {
        return $this->get(self::CM_SYSID) !== null;
    }

    /**
     * Sets value of 'launcher_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLauncherType($value)
    {
        return $this->set(self::LAUNCHER_TYPE, $value);
    }

    /**
     * Returns value of 'launcher_type' property
     *
     * @return integer
     */
    public function getLauncherType()
    {
        $value = $this->get(self::LAUNCHER_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'launcher_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLauncherType()
    {
        return $this->get(self::LAUNCHER_TYPE) !== null;
    }

    /**
     * Sets value of 'realm' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRealm($value)
    {
        return $this->set(self::REALM, $value);
    }

    /**
     * Returns value of 'realm' property
     *
     * @return integer
     */
    public function getRealm()
    {
        $value = $this->get(self::REALM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'realm' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRealm()
    {
        return $this->get(self::REALM) !== null;
    }

    /**
     * Sets value of 'timeout_ms' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeoutMs($value)
    {
        return $this->set(self::TIMEOUT_MS, $value);
    }

    /**
     * Returns value of 'timeout_ms' property
     *
     * @return integer
     */
    public function getTimeoutMs()
    {
        $value = $this->get(self::TIMEOUT_MS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timeout_ms' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeoutMs()
    {
        return $this->get(self::TIMEOUT_MS) !== null;
    }

    /**
     * Sets value of 'debug_source' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDebugSource($value)
    {
        return $this->set(self::DEBUG_SOURCE, $value);
    }

    /**
     * Returns value of 'debug_source' property
     *
     * @return string
     */
    public function getDebugSource()
    {
        $value = $this->get(self::DEBUG_SOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'debug_source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDebugSource()
    {
        return $this->get(self::DEBUG_SOURCE) !== null;
    }

    /**
     * Sets value of 'debug_source_string_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDebugSourceStringIndex($value)
    {
        return $this->set(self::DEBUG_SOURCE_STRING_INDEX, $value);
    }

    /**
     * Returns value of 'debug_source_string_index' property
     *
     * @return integer
     */
    public function getDebugSourceStringIndex()
    {
        $value = $this->get(self::DEBUG_SOURCE_STRING_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'debug_source_string_index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDebugSourceStringIndex()
    {
        return $this->get(self::DEBUG_SOURCE_STRING_INDEX) !== null;
    }

    /**
     * Sets value of 'token_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTokenId($value)
    {
        return $this->set(self::TOKEN_ID, $value);
    }

    /**
     * Returns value of 'token_id' property
     *
     * @return integer
     */
    public function getTokenId()
    {
        $value = $this->get(self::TOKEN_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'token_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTokenId()
    {
        return $this->get(self::TOKEN_ID) !== null;
    }

    /**
     * Sets value of 'routing_gc' property
     *
     * @param CMsgGCRoutingProtoBufHeader $value Property value
     *
     * @return null
     */
    public function setRoutingGc(CMsgGCRoutingProtoBufHeader $value=null)
    {
        return $this->set(self::ROUTING_GC, $value);
    }

    /**
     * Returns value of 'routing_gc' property
     *
     * @return CMsgGCRoutingProtoBufHeader
     */
    public function getRoutingGc()
    {
        return $this->get(self::ROUTING_GC);
    }

    /**
     * Returns true if 'routing_gc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoutingGc()
    {
        return $this->get(self::ROUTING_GC) !== null;
    }

    /**
     * Sets value of 'session_disposition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSessionDisposition($value)
    {
        return $this->set(self::SESSION_DISPOSITION, $value);
    }

    /**
     * Returns value of 'session_disposition' property
     *
     * @return integer
     */
    public function getSessionDisposition()
    {
        $value = $this->get(self::SESSION_DISPOSITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'session_disposition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSessionDisposition()
    {
        return $this->get(self::SESSION_DISPOSITION) !== null;
    }

    /**
     * Sets value of 'wg_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWgToken($value)
    {
        return $this->set(self::WG_TOKEN, $value);
    }

    /**
     * Returns value of 'wg_token' property
     *
     * @return string
     */
    public function getWgToken()
    {
        $value = $this->get(self::WG_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wg_token' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWgToken()
    {
        return $this->get(self::WG_TOKEN) !== null;
    }

    /**
     * Sets value of 'webui_auth_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebuiAuthKey($value)
    {
        return $this->set(self::WEBUI_AUTH_KEY, $value);
    }

    /**
     * Returns value of 'webui_auth_key' property
     *
     * @return string
     */
    public function getWebuiAuthKey()
    {
        $value = $this->get(self::WEBUI_AUTH_KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'webui_auth_key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWebuiAuthKey()
    {
        return $this->get(self::WEBUI_AUTH_KEY) !== null;
    }

    /**
     * Appends value to 'exclude_client_sessionids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendExcludeClientSessionids($value)
    {
        return $this->append(self::EXCLUDE_CLIENT_SESSIONIDS, $value);
    }

    /**
     * Clears 'exclude_client_sessionids' list
     *
     * @return null
     */
    public function clearExcludeClientSessionids()
    {
        return $this->clear(self::EXCLUDE_CLIENT_SESSIONIDS);
    }
    /**
     * Returns 'exclude_client_sessionids' list
     *
     * @return integer[]
     */
    public function getExcludeClientSessionids()
    {
        return $this->get(self::EXCLUDE_CLIENT_SESSIONIDS);
    }

    /**
     * Returns true if 'exclude_client_sessionids' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExcludeClientSessionids()
    {
        return count($this->get(self::EXCLUDE_CLIENT_SESSIONIDS)) !== 0;
    }

    /**
     * Returns 'exclude_client_sessionids' iterator
     *
     * @return \ArrayIterator
     */
    public function getExcludeClientSessionidsIterator()
    {
        return new \ArrayIterator($this->get(self::EXCLUDE_CLIENT_SESSIONIDS));
    }
    /**
     * Returns element from 'exclude_client_sessionids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getExcludeClientSessionidsAt($offset)
    {
        return $this->get(self::EXCLUDE_CLIENT_SESSIONIDS, $offset);
    }

    /**
     * Returns count of 'exclude_client_sessionids' list
     *
     * @return int
     */
    public function getExcludeClientSessionidsCount()
    {
        return $this->count(self::EXCLUDE_CLIENT_SESSIONIDS);
    }

    /**
     * Sets value of 'ip' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::IP, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return integer
     */
    public function getIp()
    {
        $value = $this->get(self::IP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'ip_v6' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIpV6($value)
    {
        return $this->set(self::IP_V6, $value);
    }

    /**
     * Returns value of 'ip_v6' property
     *
     * @return string
     */
    public function getIpV6()
    {
        $value = $this->get(self::IP_V6);
        return $value === null ? (string)$value : $value;
    }

    /**
     * @return string
     */
    public function getIpAddr()
    {
        return 'ip_addr';
    }
}
}