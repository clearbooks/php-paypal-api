<?php

namespace Paypal\Api;

class CreateBillingAgreementReq
{

    /**
     * @var CreateBillingAgreementRequestType $CreateBillingAgreementRequest
     * @access public
     */
    public $CreateBillingAgreementRequest = null;

    /**
     * @param CreateBillingAgreementRequestType $CreateBillingAgreementRequest
     * @access public
     */
    public function __construct($CreateBillingAgreementRequest)
    {
      $this->CreateBillingAgreementRequest = $CreateBillingAgreementRequest;
    }

}
