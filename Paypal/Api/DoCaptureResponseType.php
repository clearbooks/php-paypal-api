<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoCaptureResponseType extends AbstractResponseType
{

    /**
     * @var DoCaptureResponseDetailsType $DoCaptureResponseDetails
     * @access public
     */
    public $DoCaptureResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param DoCaptureResponseDetailsType $DoCaptureResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoCaptureResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->DoCaptureResponseDetails = $DoCaptureResponseDetails;
    }

}
