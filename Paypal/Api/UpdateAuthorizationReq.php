<?php

namespace Paypal\Api;

class UpdateAuthorizationReq
{

    /**
     * @var UpdateAuthorizationRequestType $UpdateAuthorizationRequest
     * @access public
     */
    public $UpdateAuthorizationRequest = null;

    /**
     * @param UpdateAuthorizationRequestType $UpdateAuthorizationRequest
     * @access public
     */
    public function __construct($UpdateAuthorizationRequest)
    {
      $this->UpdateAuthorizationRequest = $UpdateAuthorizationRequest;
    }

}
