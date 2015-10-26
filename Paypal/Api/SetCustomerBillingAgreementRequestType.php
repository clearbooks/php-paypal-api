<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class SetCustomerBillingAgreementRequestType extends AbstractRequestType
{

    /**
     * @var SetCustomerBillingAgreementRequestDetailsType $SetCustomerBillingAgreementRequestDetails
     * @access public
     */
    public $SetCustomerBillingAgreementRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param SetCustomerBillingAgreementRequestDetailsType $SetCustomerBillingAgreementRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $SetCustomerBillingAgreementRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->SetCustomerBillingAgreementRequestDetails = $SetCustomerBillingAgreementRequestDetails;
    }

}
