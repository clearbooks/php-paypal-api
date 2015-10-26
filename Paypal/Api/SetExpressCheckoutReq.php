<?php

namespace Paypal\Api;

class SetExpressCheckoutReq
{

    /**
     * @var SetExpressCheckoutRequestType $SetExpressCheckoutRequest
     * @access public
     */
    public $SetExpressCheckoutRequest = null;

    /**
     * @param SetExpressCheckoutRequestType $SetExpressCheckoutRequest
     * @access public
     */
    public function __construct($SetExpressCheckoutRequest)
    {
      $this->SetExpressCheckoutRequest = $SetExpressCheckoutRequest;
    }

}
