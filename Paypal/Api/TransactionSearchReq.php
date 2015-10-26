<?php

namespace Paypal\Api;

class TransactionSearchReq
{

    /**
     * @var TransactionSearchRequestType $TransactionSearchRequest
     * @access public
     */
    public $TransactionSearchRequest = null;

    /**
     * @param TransactionSearchRequestType $TransactionSearchRequest
     * @access public
     */
    public function __construct($TransactionSearchRequest)
    {
      $this->TransactionSearchRequest = $TransactionSearchRequest;
    }

}
