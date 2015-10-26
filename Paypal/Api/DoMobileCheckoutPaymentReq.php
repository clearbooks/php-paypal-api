<?php

namespace Paypal\Api;

class DoMobileCheckoutPaymentReq
{

    /**
     * @var DoMobileCheckoutPaymentRequestType $DoMobileCheckoutPaymentRequest
     * @access public
     */
    public $DoMobileCheckoutPaymentRequest = null;

    /**
     * @param DoMobileCheckoutPaymentRequestType $DoMobileCheckoutPaymentRequest
     * @access public
     */
    public function __construct($DoMobileCheckoutPaymentRequest)
    {
      $this->DoMobileCheckoutPaymentRequest = $DoMobileCheckoutPaymentRequest;
    }

}
