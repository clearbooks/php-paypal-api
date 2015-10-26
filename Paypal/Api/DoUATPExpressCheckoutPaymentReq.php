<?php

namespace Paypal\Api;

class DoUATPExpressCheckoutPaymentReq
{

    /**
     * @var DoUATPExpressCheckoutPaymentRequestType $DoUATPExpressCheckoutPaymentRequest
     * @access public
     */
    public $DoUATPExpressCheckoutPaymentRequest = null;

    /**
     * @param DoUATPExpressCheckoutPaymentRequestType $DoUATPExpressCheckoutPaymentRequest
     * @access public
     */
    public function __construct($DoUATPExpressCheckoutPaymentRequest)
    {
      $this->DoUATPExpressCheckoutPaymentRequest = $DoUATPExpressCheckoutPaymentRequest;
    }

}
