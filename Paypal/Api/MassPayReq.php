<?php

namespace Paypal\Api;

class MassPayReq
{

    /**
     * @var MassPayRequestType $MassPayRequest
     * @access public
     */
    public $MassPayRequest = null;

    /**
     * @param MassPayRequestType $MassPayRequest
     * @access public
     */
    public function __construct($MassPayRequest)
    {
      $this->MassPayRequest = $MassPayRequest;
    }

}
