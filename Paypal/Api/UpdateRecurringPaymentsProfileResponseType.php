<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class UpdateRecurringPaymentsProfileResponseType extends AbstractResponseType
{

    /**
     * @var UpdateRecurringPaymentsProfileResponseDetailsType $UpdateRecurringPaymentsProfileResponseDetails
     * @access public
     */
    public $UpdateRecurringPaymentsProfileResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param UpdateRecurringPaymentsProfileResponseDetailsType $UpdateRecurringPaymentsProfileResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $UpdateRecurringPaymentsProfileResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->UpdateRecurringPaymentsProfileResponseDetails = $UpdateRecurringPaymentsProfileResponseDetails;
    }

}
