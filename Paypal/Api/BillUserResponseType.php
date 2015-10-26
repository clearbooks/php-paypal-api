<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BillUserResponseType extends AbstractResponseType
{

    /**
     * @var MerchantPullPaymentResponseType $BillUserResponseDetails
     * @access public
     */
    public $BillUserResponseDetails = null;

    /**
     * @var FMFDetailsType $FMFDetails
     * @access public
     */
    public $FMFDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param MerchantPullPaymentResponseType $BillUserResponseDetails
     * @param FMFDetailsType $FMFDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $BillUserResponseDetails, $FMFDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->BillUserResponseDetails = $BillUserResponseDetails;
      $this->FMFDetails = $FMFDetails;
    }

}
