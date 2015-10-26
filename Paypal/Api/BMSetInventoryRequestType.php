<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BMSetInventoryRequestType extends AbstractRequestType
{

    /**
     * @var string $HostedButtonID
     * @access public
     */
    public $HostedButtonID = null;

    /**
     * @var string $TrackInv
     * @access public
     */
    public $TrackInv = null;

    /**
     * @var string $TrackPnl
     * @access public
     */
    public $TrackPnl = null;

    /**
     * @var ItemTrackingDetailsType $ItemTrackingDetails
     * @access public
     */
    public $ItemTrackingDetails = null;

    /**
     * @var string $OptionIndex
     * @access public
     */
    public $OptionIndex = null;

    /**
     * @var OptionTrackingDetailsType $OptionTrackingDetails
     * @access public
     */
    public $OptionTrackingDetails = null;

    /**
     * @var string $SoldoutURL
     * @access public
     */
    public $SoldoutURL = null;

    /**
     * @var string $ReuseDigitalDownloadKeys
     * @access public
     */
    public $ReuseDigitalDownloadKeys = null;

    /**
     * @var string $AppendDigitalDownloadKeys
     * @access public
     */
    public $AppendDigitalDownloadKeys = null;

    /**
     * @var string $DigitalDownloadKeys
     * @access public
     */
    public $DigitalDownloadKeys = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $HostedButtonID
     * @param string $TrackInv
     * @param string $TrackPnl
     * @param ItemTrackingDetailsType $ItemTrackingDetails
     * @param string $OptionIndex
     * @param OptionTrackingDetailsType $OptionTrackingDetails
     * @param string $SoldoutURL
     * @param string $ReuseDigitalDownloadKeys
     * @param string $AppendDigitalDownloadKeys
     * @param string $DigitalDownloadKeys
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $HostedButtonID, $TrackInv, $TrackPnl, $ItemTrackingDetails, $OptionIndex, $OptionTrackingDetails, $SoldoutURL, $ReuseDigitalDownloadKeys, $AppendDigitalDownloadKeys, $DigitalDownloadKeys)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->HostedButtonID = $HostedButtonID;
      $this->TrackInv = $TrackInv;
      $this->TrackPnl = $TrackPnl;
      $this->ItemTrackingDetails = $ItemTrackingDetails;
      $this->OptionIndex = $OptionIndex;
      $this->OptionTrackingDetails = $OptionTrackingDetails;
      $this->SoldoutURL = $SoldoutURL;
      $this->ReuseDigitalDownloadKeys = $ReuseDigitalDownloadKeys;
      $this->AppendDigitalDownloadKeys = $AppendDigitalDownloadKeys;
      $this->DigitalDownloadKeys = $DigitalDownloadKeys;
    }

}
