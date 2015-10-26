<?php

namespace Paypal\Api;

class SetMobileCheckoutReq
{

    /**
     * @var SetMobileCheckoutRequestType $SetMobileCheckoutRequest
     * @access public
     */
    public $SetMobileCheckoutRequest = null;

    /**
     * @param SetMobileCheckoutRequestType $SetMobileCheckoutRequest
     * @access public
     */
    public function __construct($SetMobileCheckoutRequest)
    {
      $this->SetMobileCheckoutRequest = $SetMobileCheckoutRequest;
    }

}
