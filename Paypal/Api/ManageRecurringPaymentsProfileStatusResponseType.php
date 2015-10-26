<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class ManageRecurringPaymentsProfileStatusResponseType extends AbstractResponseType
{

    /**
     * @var ManageRecurringPaymentsProfileStatusResponseDetailsType $ManageRecurringPaymentsProfileStatusResponseDetails
     * @access public
     */
    public $ManageRecurringPaymentsProfileStatusResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param ManageRecurringPaymentsProfileStatusResponseDetailsType $ManageRecurringPaymentsProfileStatusResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $ManageRecurringPaymentsProfileStatusResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->ManageRecurringPaymentsProfileStatusResponseDetails = $ManageRecurringPaymentsProfileStatusResponseDetails;
    }

}
