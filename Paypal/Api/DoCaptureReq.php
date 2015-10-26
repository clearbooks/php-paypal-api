<?php

namespace Paypal\Api;

class DoCaptureReq
{

    /**
     * @var DoCaptureRequestType $DoCaptureRequest
     * @access public
     */
    public $DoCaptureRequest = null;

    /**
     * @param DoCaptureRequestType $DoCaptureRequest
     * @access public
     */
    public function __construct($DoCaptureRequest)
    {
      $this->DoCaptureRequest = $DoCaptureRequest;
    }

}
