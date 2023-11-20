<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CCDDBAppDetailCommon message
 */
class CCDDBAppDetailCommon extends \ProtobufMessage
{
    /* Field index constants */
    const APPID = 1;
    const NAME = 2;
    const ICON = 3;
    const TOOL = 6;
    const DEMO = 7;
    const MEDIA = 8;
    const COMMUNITY_VISIBLE_STATS = 9;
    const FRIENDLY_NAME = 10;
    const PROPAGATION = 11;
    const HAS_ADULT_CONTENT = 12;
    const IS_VISIBLE_IN_STEAM_CHINA = 13;
    const APP_TYPE = 14;
    const HAS_ADULT_CONTENT_SEX = 15;
    const HAS_ADULT_CONTENT_VIOLENCE = 16;
    const CONTENT_DESCRIPTORIDS = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::APPID => array(
            'name' => 'appid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOOL => array(
            'name' => 'tool',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DEMO => array(
            'name' => 'demo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MEDIA => array(
            'name' => 'media',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::COMMUNITY_VISIBLE_STATS => array(
            'name' => 'community_visible_stats',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FRIENDLY_NAME => array(
            'name' => 'friendly_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROPAGATION => array(
            'name' => 'propagation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HAS_ADULT_CONTENT => array(
            'name' => 'has_adult_content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::IS_VISIBLE_IN_STEAM_CHINA => array(
            'name' => 'is_visible_in_steam_china',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::APP_TYPE => array(
            'name' => 'app_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HAS_ADULT_CONTENT_SEX => array(
            'name' => 'has_adult_content_sex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::HAS_ADULT_CONTENT_VIOLENCE => array(
            'name' => 'has_adult_content_violence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CONTENT_DESCRIPTORIDS => array(
            'name' => 'content_descriptorids',
            'repeated' => true,
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
        $this->values[self::APPID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::ICON] = null;
        $this->values[self::TOOL] = null;
        $this->values[self::DEMO] = null;
        $this->values[self::MEDIA] = null;
        $this->values[self::COMMUNITY_VISIBLE_STATS] = null;
        $this->values[self::FRIENDLY_NAME] = null;
        $this->values[self::PROPAGATION] = null;
        $this->values[self::HAS_ADULT_CONTENT] = null;
        $this->values[self::IS_VISIBLE_IN_STEAM_CHINA] = null;
        $this->values[self::APP_TYPE] = null;
        $this->values[self::HAS_ADULT_CONTENT_SEX] = null;
        $this->values[self::HAS_ADULT_CONTENT_VIOLENCE] = null;
        $this->values[self::CONTENT_DESCRIPTORIDS] = array();
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
     * Sets value of 'appid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAppid($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appid' property
     *
     * @return integer
     */
    public function getAppid()
    {
        $value = $this->get(self::APPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'appid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppid()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon()
    {
        $value = $this->get(self::ICON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'icon' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIcon()
    {
        return $this->get(self::ICON) !== null;
    }

    /**
     * Sets value of 'tool' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setTool($value)
    {
        return $this->set(self::TOOL, $value);
    }

    /**
     * Returns value of 'tool' property
     *
     * @return boolean
     */
    public function getTool()
    {
        $value = $this->get(self::TOOL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'tool' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTool()
    {
        return $this->get(self::TOOL) !== null;
    }

    /**
     * Sets value of 'demo' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDemo($value)
    {
        return $this->set(self::DEMO, $value);
    }

    /**
     * Returns value of 'demo' property
     *
     * @return boolean
     */
    public function getDemo()
    {
        $value = $this->get(self::DEMO);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'demo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDemo()
    {
        return $this->get(self::DEMO) !== null;
    }

    /**
     * Sets value of 'media' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMedia($value)
    {
        return $this->set(self::MEDIA, $value);
    }

    /**
     * Returns value of 'media' property
     *
     * @return boolean
     */
    public function getMedia()
    {
        $value = $this->get(self::MEDIA);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'media' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedia()
    {
        return $this->get(self::MEDIA) !== null;
    }

    /**
     * Sets value of 'community_visible_stats' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCommunityVisibleStats($value)
    {
        return $this->set(self::COMMUNITY_VISIBLE_STATS, $value);
    }

    /**
     * Returns value of 'community_visible_stats' property
     *
     * @return boolean
     */
    public function getCommunityVisibleStats()
    {
        $value = $this->get(self::COMMUNITY_VISIBLE_STATS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'community_visible_stats' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommunityVisibleStats()
    {
        return $this->get(self::COMMUNITY_VISIBLE_STATS) !== null;
    }

    /**
     * Sets value of 'friendly_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendlyName($value)
    {
        return $this->set(self::FRIENDLY_NAME, $value);
    }

    /**
     * Returns value of 'friendly_name' property
     *
     * @return string
     */
    public function getFriendlyName()
    {
        $value = $this->get(self::FRIENDLY_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendly_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendlyName()
    {
        return $this->get(self::FRIENDLY_NAME) !== null;
    }

    /**
     * Sets value of 'propagation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPropagation($value)
    {
        return $this->set(self::PROPAGATION, $value);
    }

    /**
     * Returns value of 'propagation' property
     *
     * @return string
     */
    public function getPropagation()
    {
        $value = $this->get(self::PROPAGATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'propagation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPropagation()
    {
        return $this->get(self::PROPAGATION) !== null;
    }

    /**
     * Sets value of 'has_adult_content' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHasAdultContent($value)
    {
        return $this->set(self::HAS_ADULT_CONTENT, $value);
    }

    /**
     * Returns value of 'has_adult_content' property
     *
     * @return boolean
     */
    public function getHasAdultContent()
    {
        $value = $this->get(self::HAS_ADULT_CONTENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'has_adult_content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasAdultContent()
    {
        return $this->get(self::HAS_ADULT_CONTENT) !== null;
    }

    /**
     * Sets value of 'is_visible_in_steam_china' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsVisibleInSteamChina($value)
    {
        return $this->set(self::IS_VISIBLE_IN_STEAM_CHINA, $value);
    }

    /**
     * Returns value of 'is_visible_in_steam_china' property
     *
     * @return boolean
     */
    public function getIsVisibleInSteamChina()
    {
        $value = $this->get(self::IS_VISIBLE_IN_STEAM_CHINA);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'is_visible_in_steam_china' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsVisibleInSteamChina()
    {
        return $this->get(self::IS_VISIBLE_IN_STEAM_CHINA) !== null;
    }

    /**
     * Sets value of 'app_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAppType($value)
    {
        return $this->set(self::APP_TYPE, $value);
    }

    /**
     * Returns value of 'app_type' property
     *
     * @return integer
     */
    public function getAppType()
    {
        $value = $this->get(self::APP_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'app_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppType()
    {
        return $this->get(self::APP_TYPE) !== null;
    }

    /**
     * Sets value of 'has_adult_content_sex' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHasAdultContentSex($value)
    {
        return $this->set(self::HAS_ADULT_CONTENT_SEX, $value);
    }

    /**
     * Returns value of 'has_adult_content_sex' property
     *
     * @return boolean
     */
    public function getHasAdultContentSex()
    {
        $value = $this->get(self::HAS_ADULT_CONTENT_SEX);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'has_adult_content_sex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasAdultContentSex()
    {
        return $this->get(self::HAS_ADULT_CONTENT_SEX) !== null;
    }

    /**
     * Sets value of 'has_adult_content_violence' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHasAdultContentViolence($value)
    {
        return $this->set(self::HAS_ADULT_CONTENT_VIOLENCE, $value);
    }

    /**
     * Returns value of 'has_adult_content_violence' property
     *
     * @return boolean
     */
    public function getHasAdultContentViolence()
    {
        $value = $this->get(self::HAS_ADULT_CONTENT_VIOLENCE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'has_adult_content_violence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasAdultContentViolence()
    {
        return $this->get(self::HAS_ADULT_CONTENT_VIOLENCE) !== null;
    }

    /**
     * Appends value to 'content_descriptorids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendContentDescriptorids($value)
    {
        return $this->append(self::CONTENT_DESCRIPTORIDS, $value);
    }

    /**
     * Clears 'content_descriptorids' list
     *
     * @return null
     */
    public function clearContentDescriptorids()
    {
        return $this->clear(self::CONTENT_DESCRIPTORIDS);
    }

    /**
     * Returns 'content_descriptorids' list
     *
     * @return integer[]
     */
    public function getContentDescriptorids()
    {
        return $this->get(self::CONTENT_DESCRIPTORIDS);
    }

    /**
     * Returns true if 'content_descriptorids' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContentDescriptorids()
    {
        return count($this->get(self::CONTENT_DESCRIPTORIDS)) !== 0;
    }

    /**
     * Returns 'content_descriptorids' iterator
     *
     * @return \ArrayIterator
     */
    public function getContentDescriptoridsIterator()
    {
        return new \ArrayIterator($this->get(self::CONTENT_DESCRIPTORIDS));
    }

    /**
     * Returns element from 'content_descriptorids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getContentDescriptoridsAt($offset)
    {
        return $this->get(self::CONTENT_DESCRIPTORIDS, $offset);
    }

    /**
     * Returns count of 'content_descriptorids' list
     *
     * @return int
     */
    public function getContentDescriptoridsCount()
    {
        return $this->count(self::CONTENT_DESCRIPTORIDS);
    }
}
}