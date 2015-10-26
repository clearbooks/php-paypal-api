<?php

namespace Paypal\Api;

class GetPalDetailsReq
{

    /**
     * @var GetPalDetailsRequestType $GetPalDetailsRequest
     * @access public
     */
    public $GetPalDetailsRequest = null;

    /**
     * @param GetPalDetailsRequestType $GetPalDetailsRequest
     * @access public
     */
    public function __construct($GetPalDetailsRequest)
    {
      $this->GetPalDetailsRequest = $GetPalDetailsRequest;
    }

}
