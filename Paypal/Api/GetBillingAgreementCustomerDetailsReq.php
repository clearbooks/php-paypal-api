<?php

namespace Paypal\Api;

class GetBillingAgreementCustomerDetailsReq
{

    /**
     * @var GetBillingAgreementCustomerDetailsRequestType $GetBillingAgreementCustomerDetailsRequest
     * @access public
     */
    public $GetBillingAgreementCustomerDetailsRequest = null;

    /**
     * @param GetBillingAgreementCustomerDetailsRequestType $GetBillingAgreementCustomerDetailsRequest
     * @access public
     */
    public function __construct($GetBillingAgreementCustomerDetailsRequest)
    {
      $this->GetBillingAgreementCustomerDetailsRequest = $GetBillingAgreementCustomerDetailsRequest;
    }

}
