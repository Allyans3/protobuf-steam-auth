<?php
/**
 * Auto generated from steammessages_base.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * CMsgAppRights message
 */
class CMsgAppRights extends \ProtobufMessage
{
    /* Field index constants */
    const EDIT_INFO = 1;
    const PUBLISH = 2;
    const VIEW_ERROR_DATA = 3;
    const DOWNLOAD = 4;
    const UPLOAD_CDKEYS = 5;
    const GENERATE_CDKEYS = 6;
    const VIEW_FINANCIALS = 7;
    const MANAGE_CEG = 8;
    const MANAGE_SIGNING = 9;
    const MANAGE_CDKEYS = 10;
    const EDIT_MARKETING = 11;
    const ECONOMY_SUPPORT = 12;
    const ECONOMY_SUPPORT_SUPERVISOR = 13;
    const MANAGE_PRICING = 14;
    const BROADCAST_LIVE = 15;
    const VIEW_MARKETING_TRAFFIC = 16;
    const EDIT_STORE_DISPLAY_CONTENT = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EDIT_INFO => array(
            'name' => 'edit_info',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PUBLISH => array(
            'name' => 'publish',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VIEW_ERROR_DATA => array(
            'name' => 'view_error_data',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DOWNLOAD => array(
            'name' => 'download',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::UPLOAD_CDKEYS => array(
            'name' => 'upload_cdkeys',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::GENERATE_CDKEYS => array(
            'name' => 'generate_cdkeys',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VIEW_FINANCIALS => array(
            'name' => 'view_financials',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANAGE_CEG => array(
            'name' => 'manage_ceg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANAGE_SIGNING => array(
            'name' => 'manage_signing',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANAGE_CDKEYS => array(
            'name' => 'manage_cdkeys',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::EDIT_MARKETING => array(
            'name' => 'edit_marketing',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ECONOMY_SUPPORT => array(
            'name' => 'economy_support',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ECONOMY_SUPPORT_SUPERVISOR => array(
            'name' => 'economy_support_supervisor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANAGE_PRICING => array(
            'name' => 'manage_pricing',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BROADCAST_LIVE => array(
            'name' => 'broadcast_live',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VIEW_MARKETING_TRAFFIC => array(
            'name' => 'view_marketing_traffic',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::EDIT_STORE_DISPLAY_CONTENT => array(
            'name' => 'edit_store_display_content',
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
        $this->values[self::EDIT_INFO] = null;
        $this->values[self::PUBLISH] = null;
        $this->values[self::VIEW_ERROR_DATA] = null;
        $this->values[self::DOWNLOAD] = null;
        $this->values[self::UPLOAD_CDKEYS] = null;
        $this->values[self::GENERATE_CDKEYS] = null;
        $this->values[self::VIEW_FINANCIALS] = null;
        $this->values[self::MANAGE_CEG] = null;
        $this->values[self::MANAGE_SIGNING] = null;
        $this->values[self::MANAGE_CDKEYS] = null;
        $this->values[self::EDIT_MARKETING] = null;
        $this->values[self::ECONOMY_SUPPORT] = null;
        $this->values[self::ECONOMY_SUPPORT_SUPERVISOR] = null;
        $this->values[self::MANAGE_PRICING] = null;
        $this->values[self::BROADCAST_LIVE] = null;
        $this->values[self::VIEW_MARKETING_TRAFFIC] = null;
        $this->values[self::EDIT_STORE_DISPLAY_CONTENT] = null;
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
     * Sets value of 'edit_info' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEditInfo($value)
    {
        return $this->set(self::EDIT_INFO, $value);
    }

    /**
     * Returns value of 'edit_info' property
     *
     * @return boolean
     */
    public function getEditInfo()
    {
        $value = $this->get(self::EDIT_INFO);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'edit_info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEditInfo()
    {
        return $this->get(self::EDIT_INFO) !== null;
    }

    /**
     * Sets value of 'publish' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPublish($value)
    {
        return $this->set(self::PUBLISH, $value);
    }

    /**
     * Returns value of 'publish' property
     *
     * @return boolean
     */
    public function getPublish()
    {
        $value = $this->get(self::PUBLISH);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'publish' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublish()
    {
        return $this->get(self::PUBLISH) !== null;
    }

    /**
     * Sets value of 'view_error_data' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setViewErrorData($value)
    {
        return $this->set(self::VIEW_ERROR_DATA, $value);
    }

    /**
     * Returns value of 'view_error_data' property
     *
     * @return boolean
     */
    public function getViewErrorData()
    {
        $value = $this->get(self::VIEW_ERROR_DATA);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'view_error_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasViewErrorData()
    {
        return $this->get(self::VIEW_ERROR_DATA) !== null;
    }

    /**
     * Sets value of 'download' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDownload($value)
    {
        return $this->set(self::DOWNLOAD, $value);
    }

    /**
     * Returns value of 'download' property
     *
     * @return boolean
     */
    public function getDownload()
    {
        $value = $this->get(self::DOWNLOAD);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'download' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDownload()
    {
        return $this->get(self::DOWNLOAD) !== null;
    }

    /**
     * Sets value of 'upload_cdkeys' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setUploadCdkeys($value)
    {
        return $this->set(self::UPLOAD_CDKEYS, $value);
    }

    /**
     * Returns value of 'upload_cdkeys' property
     *
     * @return boolean
     */
    public function getUploadCdkeys()
    {
        $value = $this->get(self::UPLOAD_CDKEYS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'upload_cdkeys' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUploadCdkeys()
    {
        return $this->get(self::UPLOAD_CDKEYS) !== null;
    }

    /**
     * Sets value of 'generate_cdkeys' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setGenerateCdkeys($value)
    {
        return $this->set(self::GENERATE_CDKEYS, $value);
    }

    /**
     * Returns value of 'generate_cdkeys' property
     *
     * @return boolean
     */
    public function getGenerateCdkeys()
    {
        $value = $this->get(self::GENERATE_CDKEYS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'generate_cdkeys' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGenerateCdkeys()
    {
        return $this->get(self::GENERATE_CDKEYS) !== null;
    }

    /**
     * Sets value of 'view_financials' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setViewFinancials($value)
    {
        return $this->set(self::VIEW_FINANCIALS, $value);
    }

    /**
     * Returns value of 'view_financials' property
     *
     * @return boolean
     */
    public function getViewFinancials()
    {
        $value = $this->get(self::VIEW_FINANCIALS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'view_financials' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasViewFinancials()
    {
        return $this->get(self::VIEW_FINANCIALS) !== null;
    }

    /**
     * Sets value of 'manage_ceg' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setManageCeg($value)
    {
        return $this->set(self::MANAGE_CEG, $value);
    }

    /**
     * Returns value of 'manage_ceg' property
     *
     * @return boolean
     */
    public function getManageCeg()
    {
        $value = $this->get(self::MANAGE_CEG);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'manage_ceg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasManageCeg()
    {
        return $this->get(self::MANAGE_CEG) !== null;
    }

    /**
     * Sets value of 'manage_signing' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setManageSigning($value)
    {
        return $this->set(self::MANAGE_SIGNING, $value);
    }

    /**
     * Returns value of 'manage_signing' property
     *
     * @return boolean
     */
    public function getManageSigning()
    {
        $value = $this->get(self::MANAGE_SIGNING);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'manage_signing' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasManageSigning()
    {
        return $this->get(self::MANAGE_SIGNING) !== null;
    }

    /**
     * Sets value of 'manage_cdkeys' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setManageCdkeys($value)
    {
        return $this->set(self::MANAGE_CDKEYS, $value);
    }

    /**
     * Returns value of 'manage_cdkeys' property
     *
     * @return boolean
     */
    public function getManageCdkeys()
    {
        $value = $this->get(self::MANAGE_CDKEYS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'manage_cdkeys' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasManageCdkeys()
    {
        return $this->get(self::MANAGE_CDKEYS) !== null;
    }

    /**
     * Sets value of 'edit_marketing' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEditMarketing($value)
    {
        return $this->set(self::EDIT_MARKETING, $value);
    }

    /**
     * Returns value of 'edit_marketing' property
     *
     * @return boolean
     */
    public function getEditMarketing()
    {
        $value = $this->get(self::EDIT_MARKETING);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'edit_marketing' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEditMarketing()
    {
        return $this->get(self::EDIT_MARKETING) !== null;
    }

    /**
     * Sets value of 'economy_support' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEconomySupport($value)
    {
        return $this->set(self::ECONOMY_SUPPORT, $value);
    }

    /**
     * Returns value of 'economy_support' property
     *
     * @return boolean
     */
    public function getEconomySupport()
    {
        $value = $this->get(self::ECONOMY_SUPPORT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'economy_support' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEconomySupport()
    {
        return $this->get(self::ECONOMY_SUPPORT) !== null;
    }

    /**
     * Sets value of 'economy_support_supervisor' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEconomySupportSupervisor($value)
    {
        return $this->set(self::ECONOMY_SUPPORT_SUPERVISOR, $value);
    }

    /**
     * Returns value of 'economy_support_supervisor' property
     *
     * @return boolean
     */
    public function getEconomySupportSupervisor()
    {
        $value = $this->get(self::ECONOMY_SUPPORT_SUPERVISOR);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'economy_support_supervisor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEconomySupportSupervisor()
    {
        return $this->get(self::ECONOMY_SUPPORT_SUPERVISOR) !== null;
    }

    /**
     * Sets value of 'manage_pricing' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setManagePricing($value)
    {
        return $this->set(self::MANAGE_PRICING, $value);
    }

    /**
     * Returns value of 'manage_pricing' property
     *
     * @return boolean
     */
    public function getManagePricing()
    {
        $value = $this->get(self::MANAGE_PRICING);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'manage_pricing' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasManagePricing()
    {
        return $this->get(self::MANAGE_PRICING) !== null;
    }

    /**
     * Sets value of 'broadcast_live' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBroadcastLive($value)
    {
        return $this->set(self::BROADCAST_LIVE, $value);
    }

    /**
     * Returns value of 'broadcast_live' property
     *
     * @return boolean
     */
    public function getBroadcastLive()
    {
        $value = $this->get(self::BROADCAST_LIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'broadcast_live' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBroadcastLive()
    {
        return $this->get(self::BROADCAST_LIVE) !== null;
    }

    /**
     * Sets value of 'view_marketing_traffic' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setViewMarketingTraffic($value)
    {
        return $this->set(self::VIEW_MARKETING_TRAFFIC, $value);
    }

    /**
     * Returns value of 'view_marketing_traffic' property
     *
     * @return boolean
     */
    public function getViewMarketingTraffic()
    {
        $value = $this->get(self::VIEW_MARKETING_TRAFFIC);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'view_marketing_traffic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasViewMarketingTraffic()
    {
        return $this->get(self::VIEW_MARKETING_TRAFFIC) !== null;
    }

    /**
     * Sets value of 'edit_store_display_content' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEditStoreDisplayContent($value)
    {
        return $this->set(self::EDIT_STORE_DISPLAY_CONTENT, $value);
    }

    /**
     * Returns value of 'edit_store_display_content' property
     *
     * @return boolean
     */
    public function getEditStoreDisplayContent()
    {
        $value = $this->get(self::EDIT_STORE_DISPLAY_CONTENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'edit_store_display_content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEditStoreDisplayContent()
    {
        return $this->get(self::EDIT_STORE_DISPLAY_CONTENT) !== null;
    }
}
}