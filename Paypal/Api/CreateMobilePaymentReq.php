<?php

namespace Paypal\Api;

class CreateMobilePaymentReq
{

    /**
     * @var CreateMobilePaymentRequestType $CreateMobilePaymentRequest
     * @access public
     */
    public $CreateMobilePaymentRequest = null;

    /**
     * @param CreateMobilePaymentRequestType $CreateMobilePaymentRequest
     * @access public
     */
    public function __construct($CreateMobilePaymentRequest)
    {
      $this->CreateMobilePaymentRequest = $CreateMobilePaymentRequest;
    }

}
