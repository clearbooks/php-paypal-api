<?php

namespace Paypal\Api;

class DoExpressCheckoutPaymentReq
{

    /**
     * @var DoExpressCheckoutPaymentRequestType $DoExpressCheckoutPaymentRequest
     * @access public
     */
    public $DoExpressCheckoutPaymentRequest = null;

    /**
     * @param DoExpressCheckoutPaymentRequestType $DoExpressCheckoutPaymentRequest
     * @access public
     */
    public function __construct($DoExpressCheckoutPaymentRequest)
    {
      $this->DoExpressCheckoutPaymentRequest = $DoExpressCheckoutPaymentRequest;
    }

}
