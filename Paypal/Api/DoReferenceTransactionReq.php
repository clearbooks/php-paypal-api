<?php

namespace Paypal\Api;

class DoReferenceTransactionReq
{

    /**
     * @var DoReferenceTransactionRequestType $DoReferenceTransactionRequest
     * @access public
     */
    public $DoReferenceTransactionRequest = null;

    /**
     * @param DoReferenceTransactionRequestType $DoReferenceTransactionRequest
     * @access public
     */
    public function __construct($DoReferenceTransactionRequest)
    {
      $this->DoReferenceTransactionRequest = $DoReferenceTransactionRequest;
    }

}
