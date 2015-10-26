<?php

namespace Paypal\Api;

class CompleteRecoupReq
{

    /**
     * @var CompleteRecoupRequestType $CompleteRecoupRequest
     * @access public
     */
    public $CompleteRecoupRequest = null;

    /**
     * @param CompleteRecoupRequestType $CompleteRecoupRequest
     * @access public
     */
    public function __construct($CompleteRecoupRequest)
    {
      $this->CompleteRecoupRequest = $CompleteRecoupRequest;
    }

}
