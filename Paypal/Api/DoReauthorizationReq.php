<?php

namespace Paypal\Api;

class DoReauthorizationReq
{

    /**
     * @var DoReauthorizationRequestType $DoReauthorizationRequest
     * @access public
     */
    public $DoReauthorizationRequest = null;

    /**
     * @param DoReauthorizationRequestType $DoReauthorizationRequest
     * @access public
     */
    public function __construct($DoReauthorizationRequest)
    {
      $this->DoReauthorizationRequest = $DoReauthorizationRequest;
    }

}
