<?php

namespace Paypal\Api;

class DoNonReferencedCreditResponseDetailsType
{

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @param BasicAmountType $Amount
     * @param TransactionId $TransactionID
     * @access public
     */
    public function __construct($Amount, $TransactionID)
    {
      $this->Amount = $Amount;
      $this->TransactionID = $TransactionID;
    }

}
