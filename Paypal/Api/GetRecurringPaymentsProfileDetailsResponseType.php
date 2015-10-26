<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetRecurringPaymentsProfileDetailsResponseType extends AbstractResponseType
{

    /**
     * @var GetRecurringPaymentsProfileDetailsResponseDetailsType $GetRecurringPaymentsProfileDetailsResponseDetails
     * @access public
     */
    public $GetRecurringPaymentsProfileDetailsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetRecurringPaymentsProfileDetailsResponseDetailsType $GetRecurringPaymentsProfileDetailsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetRecurringPaymentsProfileDetailsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetRecurringPaymentsProfileDetailsResponseDetails = $GetRecurringPaymentsProfileDetailsResponseDetails;
    }

}
