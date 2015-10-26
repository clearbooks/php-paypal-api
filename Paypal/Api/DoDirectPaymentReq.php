<?php

namespace Paypal\Api;

class DoDirectPaymentReq
{

    /**
     * @var DoDirectPaymentRequestType $DoDirectPaymentRequest
     * @access public
     */
    public $DoDirectPaymentRequest = null;

    /**
     * @param DoDirectPaymentRequestType $DoDirectPaymentRequest
     * @access public
     */
    public function __construct($DoDirectPaymentRequest)
    {
      $this->DoDirectPaymentRequest = $DoDirectPaymentRequest;
    }

}
