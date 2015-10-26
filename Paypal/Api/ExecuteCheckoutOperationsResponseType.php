<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class ExecuteCheckoutOperationsResponseType extends AbstractResponseType
{

    /**
     * @var ExecuteCheckoutOperationsResponseDetailsType $ExecuteCheckoutOperationsResponseDetails
     * @access public
     */
    public $ExecuteCheckoutOperationsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param ExecuteCheckoutOperationsResponseDetailsType $ExecuteCheckoutOperationsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $ExecuteCheckoutOperationsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->ExecuteCheckoutOperationsResponseDetails = $ExecuteCheckoutOperationsResponseDetails;
    }

}
