<?php

namespace Paypal\Api;

class RefundTransactionReq
{

    /**
     * @var RefundTransactionRequestType $RefundTransactionRequest
     * @access public
     */
    public $RefundTransactionRequest = null;

    /**
     * @param RefundTransactionRequestType $RefundTransactionRequest
     * @access public
     */
    public function __construct($RefundTransactionRequest)
    {
      $this->RefundTransactionRequest = $RefundTransactionRequest;
    }

}
