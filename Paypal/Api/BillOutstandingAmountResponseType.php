<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BillOutstandingAmountResponseType extends AbstractResponseType
{

    /**
     * @var BillOutstandingAmountResponseDetailsType $BillOutstandingAmountResponseDetails
     * @access public
     */
    public $BillOutstandingAmountResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param BillOutstandingAmountResponseDetailsType $BillOutstandingAmountResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $BillOutstandingAmountResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->BillOutstandingAmountResponseDetails = $BillOutstandingAmountResponseDetails;
    }

}
