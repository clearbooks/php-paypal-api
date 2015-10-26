<?php

namespace Paypal\Api;

class BMManageButtonStatusReq
{

    /**
     * @var BMManageButtonStatusRequestType $BMManageButtonStatusRequest
     * @access public
     */
    public $BMManageButtonStatusRequest = null;

    /**
     * @param BMManageButtonStatusRequestType $BMManageButtonStatusRequest
     * @access public
     */
    public function __construct($BMManageButtonStatusRequest)
    {
      $this->BMManageButtonStatusRequest = $BMManageButtonStatusRequest;
    }

}
