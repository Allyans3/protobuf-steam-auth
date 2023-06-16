<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * UserContentDescriptorPreferences message
 */
class UserContentDescriptorPreferences extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT_DESCRIPTORS_TO_EXCLUDE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT_DESCRIPTORS_TO_EXCLUDE => array(
            'name' => 'content_descriptors_to_exclude',
            'repeated' => true,
            'type' => UserContentDescriptorPreferences_ContentDescriptor::class
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
        $this->values[self::CONTENT_DESCRIPTORS_TO_EXCLUDE] = array();
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
     * Appends value to 'content_descriptors_to_exclude' list
     *
     * @param UserContentDescriptorPreferences_ContentDescriptor $value Value to append
     *
     * @return null
     */
    public function appendContentDescriptorsToExclude(UserContentDescriptorPreferences_ContentDescriptor $value)
    {
        return $this->append(self::CONTENT_DESCRIPTORS_TO_EXCLUDE, $value);
    }

    /**
     * Clears 'content_descriptors_to_exclude' list
     *
     * @return null
     */
    public function clearContentDescriptorsToExclude()
    {
        return $this->clear(self::CONTENT_DESCRIPTORS_TO_EXCLUDE);
    }

    /**
     * Returns 'content_descriptors_to_exclude' list
     *
     * @return UserContentDescriptorPreferences_ContentDescriptor[]
     */
    public function getContentDescriptorsToExclude()
    {
        return $this->get(self::CONTENT_DESCRIPTORS_TO_EXCLUDE);
    }

    /**
     * Returns true if 'content_descriptors_to_exclude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContentDescriptorsToExclude()
    {
        return count($this->get(self::CONTENT_DESCRIPTORS_TO_EXCLUDE)) !== 0;
    }

    /**
     * Returns 'content_descriptors_to_exclude' iterator
     *
     * @return \ArrayIterator
     */
    public function getContentDescriptorsToExcludeIterator()
    {
        return new \ArrayIterator($this->get(self::CONTENT_DESCRIPTORS_TO_EXCLUDE));
    }

    /**
     * Returns element from 'content_descriptors_to_exclude' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return UserContentDescriptorPreferences_ContentDescriptor
     */
    public function getContentDescriptorsToExcludeAt($offset)
    {
        return $this->get(self::CONTENT_DESCRIPTORS_TO_EXCLUDE, $offset);
    }

    /**
     * Returns count of 'content_descriptors_to_exclude' list
     *
     * @return int
     */
    public function getContentDescriptorsToExcludeCount()
    {
        return $this->count(self::CONTENT_DESCRIPTORS_TO_EXCLUDE);
    }
}
}