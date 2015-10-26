<?php

namespace Paypal\Api;

class InitiateRecoupReq
{

    /**
     * @var InitiateRecoupRequestType $InitiateRecoupRequest
     * @access public
     */
    public $InitiateRecoupRequest = null;

    /**
     * @param InitiateRecoupRequestType $InitiateRecoupRequest
     * @access public
     */
    public function __construct($InitiateRecoupRequest)
    {
      $this->InitiateRecoupRequest = $InitiateRecoupRequest;
    }

}
