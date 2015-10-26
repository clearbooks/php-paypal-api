<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetBillingAgreementCustomerDetailsResponseType extends AbstractResponseType
{

    /**
     * @var GetBillingAgreementCustomerDetailsResponseDetailsType $GetBillingAgreementCustomerDetailsResponseDetails
     * @access public
     */
    public $GetBillingAgreementCustomerDetailsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetBillingAgreementCustomerDetailsResponseDetailsType $GetBillingAgreementCustomerDetailsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetBillingAgreementCustomerDetailsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetBillingAgreementCustomerDetailsResponseDetails = $GetBillingAgreementCustomerDetailsResponseDetails;
    }

}
