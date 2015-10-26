<?php

namespace Paypal\Api;

class BillUserReq
{

    /**
     * @var BillUserRequestType $BillUserRequest
     * @access public
     */
    public $BillUserRequest = null;

    /**
     * @param BillUserRequestType $BillUserRequest
     * @access public
     */
    public function __construct($BillUserRequest)
    {
      $this->BillUserRequest = $BillUserRequest;
    }

}
