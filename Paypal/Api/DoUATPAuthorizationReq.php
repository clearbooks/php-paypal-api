<?php

namespace Paypal\Api;

class DoUATPAuthorizationReq
{

    /**
     * @var DoUATPAuthorizationRequestType $DoUATPAuthorizationRequest
     * @access public
     */
    public $DoUATPAuthorizationRequest = null;

    /**
     * @param DoUATPAuthorizationRequestType $DoUATPAuthorizationRequest
     * @access public
     */
    public function __construct($DoUATPAuthorizationRequest)
    {
      $this->DoUATPAuthorizationRequest = $DoUATPAuthorizationRequest;
    }

}
