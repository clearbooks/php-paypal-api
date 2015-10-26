<?php

namespace Paypal\Api;

class UpdateAccessPermissionsReq
{

    /**
     * @var UpdateAccessPermissionsRequestType $UpdateAccessPermissionsRequest
     * @access public
     */
    public $UpdateAccessPermissionsRequest = null;

    /**
     * @param UpdateAccessPermissionsRequestType $UpdateAccessPermissionsRequest
     * @access public
     */
    public function __construct($UpdateAccessPermissionsRequest)
    {
      $this->UpdateAccessPermissionsRequest = $UpdateAccessPermissionsRequest;
    }

}
