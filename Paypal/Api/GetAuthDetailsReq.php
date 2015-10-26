<?php

namespace Paypal\Api;

class GetAuthDetailsReq
{

    /**
     * @var GetAuthDetailsRequestType $GetAuthDetailsRequest
     * @access public
     */
    public $GetAuthDetailsRequest = null;

    /**
     * @param GetAuthDetailsRequestType $GetAuthDetailsRequest
     * @access public
     */
    public function __construct($GetAuthDetailsRequest)
    {
      $this->GetAuthDetailsRequest = $GetAuthDetailsRequest;
    }

}
