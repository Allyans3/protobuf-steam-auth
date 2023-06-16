<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CCuratorPreferences message
 */
class CCuratorPreferences extends \ProtobufMessage
{
    /* Field index constants */
    const SUPPORTED_LANGUAGES = 1;
    const PLATFORM_WINDOWS = 2;
    const PLATFORM_MAC = 3;
    const PLATFORM_LINUX = 4;
    const VR_CONTENT = 5;
    const ADULT_CONTENT_VIOLENCE = 6;
    const ADULT_CONTENT_SEX = 7;
    const TIMESTAMP_UPDATED = 8;
    const TAGIDS_CURATED = 9;
    const TAGIDS_FILTERED = 10;
    const WEBSITE_TITLE = 11;
    const WEBSITE_URL = 12;
    const DISCUSSION_URL = 13;
    const SHOW_BROADCAST = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUPPORTED_LANGUAGES => array(
            'name' => 'supported_languages',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLATFORM_WINDOWS => array(
            'name' => 'platform_windows',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PLATFORM_MAC => array(
            'name' => 'platform_mac',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PLATFORM_LINUX => array(
            'name' => 'platform_linux',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VR_CONTENT => array(
            'name' => 'vr_content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ADULT_CONTENT_VIOLENCE => array(
            'name' => 'adult_content_violence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ADULT_CONTENT_SEX => array(
            'name' => 'adult_content_sex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TIMESTAMP_UPDATED => array(
            'name' => 'timestamp_updated',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGIDS_CURATED => array(
            'name' => 'tagids_curated',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGIDS_FILTERED => array(
            'name' => 'tagids_filtered',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEBSITE_TITLE => array(
            'name' => 'website_title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WEBSITE_URL => array(
            'name' => 'website_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISCUSSION_URL => array(
            'name' => 'discussion_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHOW_BROADCAST => array(
            'name' => 'show_broadcast',
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
        $this->values[self::SUPPORTED_LANGUAGES] = null;
        $this->values[self::PLATFORM_WINDOWS] = null;
        $this->values[self::PLATFORM_MAC] = null;
        $this->values[self::PLATFORM_LINUX] = null;
        $this->values[self::VR_CONTENT] = null;
        $this->values[self::ADULT_CONTENT_VIOLENCE] = null;
        $this->values[self::ADULT_CONTENT_SEX] = null;
        $this->values[self::TIMESTAMP_UPDATED] = null;
        $this->values[self::TAGIDS_CURATED] = array();
        $this->values[self::TAGIDS_FILTERED] = array();
        $this->values[self::WEBSITE_TITLE] = null;
        $this->values[self::WEBSITE_URL] = null;
        $this->values[self::DISCUSSION_URL] = null;
        $this->values[self::SHOW_BROADCAST] = null;
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
     * Sets value of 'supported_languages' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSupportedLanguages($value)
    {
        return $this->set(self::SUPPORTED_LANGUAGES, $value);
    }

    /**
     * Returns value of 'supported_languages' property
     *
     * @return integer
     */
    public function getSupportedLanguages()
    {
        $value = $this->get(self::SUPPORTED_LANGUAGES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'supported_languages' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSupportedLanguages()
    {
        return $this->get(self::SUPPORTED_LANGUAGES) !== null;
    }

    /**
     * Sets value of 'platform_windows' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPlatformWindows($value)
    {
        return $this->set(self::PLATFORM_WINDOWS, $value);
    }

    /**
     * Returns value of 'platform_windows' property
     *
     * @return boolean
     */
    public function getPlatformWindows()
    {
        $value = $this->get(self::PLATFORM_WINDOWS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'platform_windows' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatformWindows()
    {
        return $this->get(self::PLATFORM_WINDOWS) !== null;
    }

    /**
     * Sets value of 'platform_mac' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPlatformMac($value)
    {
        return $this->set(self::PLATFORM_MAC, $value);
    }

    /**
     * Returns value of 'platform_mac' property
     *
     * @return boolean
     */
    public function getPlatformMac()
    {
        $value = $this->get(self::PLATFORM_MAC);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'platform_mac' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatformMac()
    {
        return $this->get(self::PLATFORM_MAC) !== null;
    }

    /**
     * Sets value of 'platform_linux' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPlatformLinux($value)
    {
        return $this->set(self::PLATFORM_LINUX, $value);
    }

    /**
     * Returns value of 'platform_linux' property
     *
     * @return boolean
     */
    public function getPlatformLinux()
    {
        $value = $this->get(self::PLATFORM_LINUX);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'platform_linux' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatformLinux()
    {
        return $this->get(self::PLATFORM_LINUX) !== null;
    }

    /**
     * Sets value of 'vr_content' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setVrContent($value)
    {
        return $this->set(self::VR_CONTENT, $value);
    }

    /**
     * Returns value of 'vr_content' property
     *
     * @return boolean
     */
    public function getVrContent()
    {
        $value = $this->get(self::VR_CONTENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'vr_content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVrContent()
    {
        return $this->get(self::VR_CONTENT) !== null;
    }

    /**
     * Sets value of 'adult_content_violence' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAdultContentViolence($value)
    {
        return $this->set(self::ADULT_CONTENT_VIOLENCE, $value);
    }

    /**
     * Returns value of 'adult_content_violence' property
     *
     * @return boolean
     */
    public function getAdultContentViolence()
    {
        $value = $this->get(self::ADULT_CONTENT_VIOLENCE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'adult_content_violence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdultContentViolence()
    {
        return $this->get(self::ADULT_CONTENT_VIOLENCE) !== null;
    }

    /**
     * Sets value of 'adult_content_sex' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAdultContentSex($value)
    {
        return $this->set(self::ADULT_CONTENT_SEX, $value);
    }

    /**
     * Returns value of 'adult_content_sex' property
     *
     * @return boolean
     */
    public function getAdultContentSex()
    {
        $value = $this->get(self::ADULT_CONTENT_SEX);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'adult_content_sex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdultContentSex()
    {
        return $this->get(self::ADULT_CONTENT_SEX) !== null;
    }

    /**
     * Sets value of 'timestamp_updated' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestampUpdated($value)
    {
        return $this->set(self::TIMESTAMP_UPDATED, $value);
    }

    /**
     * Returns value of 'timestamp_updated' property
     *
     * @return integer
     */
    public function getTimestampUpdated()
    {
        $value = $this->get(self::TIMESTAMP_UPDATED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestamp_updated' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestampUpdated()
    {
        return $this->get(self::TIMESTAMP_UPDATED) !== null;
    }

    /**
     * Appends value to 'tagids_curated' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendTagidsCurated($value)
    {
        return $this->append(self::TAGIDS_CURATED, $value);
    }

    /**
     * Clears 'tagids_curated' list
     *
     * @return null
     */
    public function clearTagidsCurated()
    {
        return $this->clear(self::TAGIDS_CURATED);
    }

    /**
     * Returns 'tagids_curated' list
     *
     * @return integer[]
     */
    public function getTagidsCurated()
    {
        return $this->get(self::TAGIDS_CURATED);
    }

    /**
     * Returns true if 'tagids_curated' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagidsCurated()
    {
        return count($this->get(self::TAGIDS_CURATED)) !== 0;
    }

    /**
     * Returns 'tagids_curated' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagidsCuratedIterator()
    {
        return new \ArrayIterator($this->get(self::TAGIDS_CURATED));
    }

    /**
     * Returns element from 'tagids_curated' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTagidsCuratedAt($offset)
    {
        return $this->get(self::TAGIDS_CURATED, $offset);
    }

    /**
     * Returns count of 'tagids_curated' list
     *
     * @return int
     */
    public function getTagidsCuratedCount()
    {
        return $this->count(self::TAGIDS_CURATED);
    }

    /**
     * Appends value to 'tagids_filtered' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendTagidsFiltered($value)
    {
        return $this->append(self::TAGIDS_FILTERED, $value);
    }

    /**
     * Clears 'tagids_filtered' list
     *
     * @return null
     */
    public function clearTagidsFiltered()
    {
        return $this->clear(self::TAGIDS_FILTERED);
    }

    /**
     * Returns 'tagids_filtered' list
     *
     * @return integer[]
     */
    public function getTagidsFiltered()
    {
        return $this->get(self::TAGIDS_FILTERED);
    }

    /**
     * Returns true if 'tagids_filtered' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagidsFiltered()
    {
        return count($this->get(self::TAGIDS_FILTERED)) !== 0;
    }

    /**
     * Returns 'tagids_filtered' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagidsFilteredIterator()
    {
        return new \ArrayIterator($this->get(self::TAGIDS_FILTERED));
    }

    /**
     * Returns element from 'tagids_filtered' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTagidsFilteredAt($offset)
    {
        return $this->get(self::TAGIDS_FILTERED, $offset);
    }

    /**
     * Returns count of 'tagids_filtered' list
     *
     * @return int
     */
    public function getTagidsFilteredCount()
    {
        return $this->count(self::TAGIDS_FILTERED);
    }

    /**
     * Sets value of 'website_title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebsiteTitle($value)
    {
        return $this->set(self::WEBSITE_TITLE, $value);
    }

    /**
     * Returns value of 'website_title' property
     *
     * @return string
     */
    public function getWebsiteTitle()
    {
        $value = $this->get(self::WEBSITE_TITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'website_title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWebsiteTitle()
    {
        return $this->get(self::WEBSITE_TITLE) !== null;
    }

    /**
     * Sets value of 'website_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebsiteUrl($value)
    {
        return $this->set(self::WEBSITE_URL, $value);
    }

    /**
     * Returns value of 'website_url' property
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        $value = $this->get(self::WEBSITE_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'website_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWebsiteUrl()
    {
        return $this->get(self::WEBSITE_URL) !== null;
    }

    /**
     * Sets value of 'discussion_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscussionUrl($value)
    {
        return $this->set(self::DISCUSSION_URL, $value);
    }

    /**
     * Returns value of 'discussion_url' property
     *
     * @return string
     */
    public function getDiscussionUrl()
    {
        $value = $this->get(self::DISCUSSION_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'discussion_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDiscussionUrl()
    {
        return $this->get(self::DISCUSSION_URL) !== null;
    }

    /**
     * Sets value of 'show_broadcast' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setShowBroadcast($value)
    {
        return $this->set(self::SHOW_BROADCAST, $value);
    }

    /**
     * Returns value of 'show_broadcast' property
     *
     * @return boolean
     */
    public function getShowBroadcast()
    {
        $value = $this->get(self::SHOW_BROADCAST);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'show_broadcast' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShowBroadcast()
    {
        return $this->get(self::SHOW_BROADCAST) !== null;
    }
}
}