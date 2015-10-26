<?php

namespace Paypal\Api;

class ManagePendingTransactionStatusReq
{

    /**
     * @var ManagePendingTransactionStatusRequestType $ManagePendingTransactionStatusRequest
     * @access public
     */
    public $ManagePendingTransactionStatusRequest = null;

    /**
     * @param ManagePendingTransactionStatusRequestType $ManagePendingTransactionStatusRequest
     * @access public
     */
    public function __construct($ManagePendingTransactionStatusRequest)
    {
      $this->ManagePendingTransactionStatusRequest = $ManagePendingTransactionStatusRequest;
    }

}
