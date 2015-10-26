<?php

namespace Paypal\Api;

class BMGetButtonDetailsReq
{

    /**
     * @var BMGetButtonDetailsRequestType $BMGetButtonDetailsRequest
     * @access public
     */
    public $BMGetButtonDetailsRequest = null;

    /**
     * @param BMGetButtonDetailsRequestType $BMGetButtonDetailsRequest
     * @access public
     */
    public function __construct($BMGetButtonDetailsRequest)
    {
      $this->BMGetButtonDetailsRequest = $BMGetButtonDetailsRequest;
    }

}
