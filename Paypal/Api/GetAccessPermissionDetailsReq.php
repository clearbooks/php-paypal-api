<?php

namespace Paypal\Api;

class GetAccessPermissionDetailsReq
{

    /**
     * @var GetAccessPermissionDetailsRequestType $GetAccessPermissionDetailsRequest
     * @access public
     */
    public $GetAccessPermissionDetailsRequest = null;

    /**
     * @param GetAccessPermissionDetailsRequestType $GetAccessPermissionDetailsRequest
     * @access public
     */
    public function __construct($GetAccessPermissionDetailsRequest)
    {
      $this->GetAccessPermissionDetailsRequest = $GetAccessPermissionDetailsRequest;
    }

}
