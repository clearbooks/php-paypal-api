<?php

namespace Paypal\Api;

class DoCancelReq
{

    /**
     * @var DoCancelRequestType $DoCancelRequest
     * @access public
     */
    public $DoCancelRequest = null;

    /**
     * @param DoCancelRequestType $DoCancelRequest
     * @access public
     */
    public function __construct($DoCancelRequest)
    {
      $this->DoCancelRequest = $DoCancelRequest;
    }

}
