<?php

namespace Paypal\Api;

class SetAccessPermissionsReq
{

    /**
     * @var SetAccessPermissionsRequestType $SetAccessPermissionsRequest
     * @access public
     */
    public $SetAccessPermissionsRequest = null;

    /**
     * @param SetAccessPermissionsRequestType $SetAccessPermissionsRequest
     * @access public
     */
    public function __construct($SetAccessPermissionsRequest)
    {
      $this->SetAccessPermissionsRequest = $SetAccessPermissionsRequest;
    }

}
