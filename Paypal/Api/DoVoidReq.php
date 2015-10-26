<?php

namespace Paypal\Api;

class DoVoidReq
{

    /**
     * @var DoVoidRequestType $DoVoidRequest
     * @access public
     */
    public $DoVoidRequest = null;

    /**
     * @param DoVoidRequestType $DoVoidRequest
     * @access public
     */
    public function __construct($DoVoidRequest)
    {
      $this->DoVoidRequest = $DoVoidRequest;
    }

}
