<?php

namespace Paypal\Api;

class BMGetInventoryReq
{

    /**
     * @var BMGetInventoryRequestType $BMGetInventoryRequest
     * @access public
     */
    public $BMGetInventoryRequest = null;

    /**
     * @param BMGetInventoryRequestType $BMGetInventoryRequest
     * @access public
     */
    public function __construct($BMGetInventoryRequest)
    {
      $this->BMGetInventoryRequest = $BMGetInventoryRequest;
    }

}
