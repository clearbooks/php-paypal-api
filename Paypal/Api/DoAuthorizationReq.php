<?php

namespace Paypal\Api;

class DoAuthorizationReq
{

    /**
     * @var DoAuthorizationRequestType $DoAuthorizationRequest
     * @access public
     */
    public $DoAuthorizationRequest = null;

    /**
     * @param DoAuthorizationRequestType $DoAuthorizationRequest
     * @access public
     */
    public function __construct($DoAuthorizationRequest)
    {
      $this->DoAuthorizationRequest = $DoAuthorizationRequest;
    }

}
