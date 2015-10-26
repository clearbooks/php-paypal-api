<?php

namespace Paypal\Api;

class GetMobileStatusReq
{

    /**
     * @var GetMobileStatusRequestType $GetMobileStatusRequest
     * @access public
     */
    public $GetMobileStatusRequest = null;

    /**
     * @param GetMobileStatusRequestType $GetMobileStatusRequest
     * @access public
     */
    public function __construct($GetMobileStatusRequest)
    {
      $this->GetMobileStatusRequest = $GetMobileStatusRequest;
    }

}
