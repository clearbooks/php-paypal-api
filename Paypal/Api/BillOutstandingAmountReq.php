<?php

namespace Paypal\Api;

class BillOutstandingAmountReq
{

    /**
     * @var BillOutstandingAmountRequestType $BillOutstandingAmountRequest
     * @access public
     */
    public $BillOutstandingAmountRequest = null;

    /**
     * @param BillOutstandingAmountRequestType $BillOutstandingAmountRequest
     * @access public
     */
    public function __construct($BillOutstandingAmountRequest)
    {
      $this->BillOutstandingAmountRequest = $BillOutstandingAmountRequest;
    }

}
