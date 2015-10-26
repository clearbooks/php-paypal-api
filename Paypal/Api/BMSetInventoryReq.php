<?php

namespace Paypal\Api;

class BMSetInventoryReq
{

    /**
     * @var BMSetInventoryRequestType $BMSetInventoryRequest
     * @access public
     */
    public $BMSetInventoryRequest = null;

    /**
     * @param BMSetInventoryRequestType $BMSetInventoryRequest
     * @access public
     */
    public function __construct($BMSetInventoryRequest)
    {
      $this->BMSetInventoryRequest = $BMSetInventoryRequest;
    }

}
