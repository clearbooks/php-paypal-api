<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BMGetInventoryResponseType extends AbstractResponseType
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
     * @var string $OptionName
     * @access public
     */
    public $OptionName = null;

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
     * @var string $DigitalDownloadKeys
     * @access public
     */
    public $DigitalDownloadKeys = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $HostedButtonID
     * @param string $TrackInv
     * @param string $TrackPnl
     * @param ItemTrackingDetailsType $ItemTrackingDetails
     * @param string $OptionIndex
     * @param string $OptionName
     * @param OptionTrackingDetailsType $OptionTrackingDetails
     * @param string $SoldoutURL
     * @param string $DigitalDownloadKeys
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $HostedButtonID, $TrackInv, $TrackPnl, $ItemTrackingDetails, $OptionIndex, $OptionName, $OptionTrackingDetails, $SoldoutURL, $DigitalDownloadKeys)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->HostedButtonID = $HostedButtonID;
      $this->TrackInv = $TrackInv;
      $this->TrackPnl = $TrackPnl;
      $this->ItemTrackingDetails = $ItemTrackingDetails;
      $this->OptionIndex = $OptionIndex;
      $this->OptionName = $OptionName;
      $this->OptionTrackingDetails = $OptionTrackingDetails;
      $this->SoldoutURL = $SoldoutURL;
      $this->DigitalDownloadKeys = $DigitalDownloadKeys;
    }

}
