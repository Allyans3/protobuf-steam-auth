<?php
/**
 * Auto generated from steammessages_base.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * CMsgGCRoutingProtoBufHeader message
 */
class CMsgGCRoutingProtoBufHeader extends \ProtobufMessage
{
    /* Field index constants */
    const DST_GCID_QUEUE = 1;
    const DST_GC_DIR_INDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DST_GCID_QUEUE => array(
            'name' => 'dst_gcid_queue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DST_GC_DIR_INDEX => array(
            'name' => 'dst_gc_dir_index',
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
        $this->values[self::DST_GCID_QUEUE] = null;
        $this->values[self::DST_GC_DIR_INDEX] = null;
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
     * Sets value of 'dst_gcid_queue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDstGcidQueue($value)
    {
        return $this->set(self::DST_GCID_QUEUE, $value);
    }

    /**
     * Returns value of 'dst_gcid_queue' property
     *
     * @return integer
     */
    public function getDstGcidQueue()
    {
        $value = $this->get(self::DST_GCID_QUEUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dst_gcid_queue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstGcidQueue()
    {
        return $this->get(self::DST_GCID_QUEUE) !== null;
    }

    /**
     * Sets value of 'dst_gc_dir_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDstGcDirIndex($value)
    {
        return $this->set(self::DST_GC_DIR_INDEX, $value);
    }

    /**
     * Returns value of 'dst_gc_dir_index' property
     *
     * @return integer
     */
    public function getDstGcDirIndex()
    {
        $value = $this->get(self::DST_GC_DIR_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dst_gc_dir_index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstGcDirIndex()
    {
        return $this->get(self::DST_GC_DIR_INDEX) !== null;
    }
}
}