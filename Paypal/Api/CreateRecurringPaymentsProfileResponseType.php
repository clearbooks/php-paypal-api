<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class CreateRecurringPaymentsProfileResponseType extends AbstractResponseType
{

    /**
     * @var CreateRecurringPaymentsProfileResponseDetailsType $CreateRecurringPaymentsProfileResponseDetails
     * @access public
     */
    public $CreateRecurringPaymentsProfileResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param CreateRecurringPaymentsProfileResponseDetailsType $CreateRecurringPaymentsProfileResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $CreateRecurringPaymentsProfileResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->CreateRecurringPaymentsProfileResponseDetails = $CreateRecurringPaymentsProfileResponseDetails;
    }

}
