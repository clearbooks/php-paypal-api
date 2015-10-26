<?php

namespace Paypal\Api;

class GetExpressCheckoutDetailsReq
{

    /**
     * @var GetExpressCheckoutDetailsRequestType $GetExpressCheckoutDetailsRequest
     * @access public
     */
    public $GetExpressCheckoutDetailsRequest = null;

    /**
     * @param GetExpressCheckoutDetailsRequestType $GetExpressCheckoutDetailsRequest
     * @access public
     */
    public function __construct($GetExpressCheckoutDetailsRequest)
    {
      $this->GetExpressCheckoutDetailsRequest = $GetExpressCheckoutDetailsRequest;
    }

}
