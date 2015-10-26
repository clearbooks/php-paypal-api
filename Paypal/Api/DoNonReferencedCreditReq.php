<?php

namespace Paypal\Api;

class DoNonReferencedCreditReq
{

    /**
     * @var DoNonReferencedCreditRequestType $DoNonReferencedCreditRequest
     * @access public
     */
    public $DoNonReferencedCreditRequest = null;

    /**
     * @param DoNonReferencedCreditRequestType $DoNonReferencedCreditRequest
     * @access public
     */
    public function __construct($DoNonReferencedCreditRequest)
    {
      $this->DoNonReferencedCreditRequest = $DoNonReferencedCreditRequest;
    }

}
