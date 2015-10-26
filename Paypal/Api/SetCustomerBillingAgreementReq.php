<?php

namespace Paypal\Api;

class SetCustomerBillingAgreementReq
{

    /**
     * @var SetCustomerBillingAgreementRequestType $SetCustomerBillingAgreementRequest
     * @access public
     */
    public $SetCustomerBillingAgreementRequest = null;

    /**
     * @param SetCustomerBillingAgreementRequestType $SetCustomerBillingAgreementRequest
     * @access public
     */
    public function __construct($SetCustomerBillingAgreementRequest)
    {
      $this->SetCustomerBillingAgreementRequest = $SetCustomerBillingAgreementRequest;
    }

}
