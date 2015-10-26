<?php

namespace Paypal\Api;

class ReverseTransactionReq
{

    /**
     * @var ReverseTransactionRequestType $ReverseTransactionRequest
     * @access public
     */
    public $ReverseTransactionRequest = null;

    /**
     * @param ReverseTransactionRequestType $ReverseTransactionRequest
     * @access public
     */
    public function __construct($ReverseTransactionRequest)
    {
      $this->ReverseTransactionRequest = $ReverseTransactionRequest;
    }

}
