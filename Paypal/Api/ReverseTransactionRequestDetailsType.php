<?php

namespace Paypal\Api;

class ReverseTransactionRequestDetailsType
{

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @param TransactionId $TransactionID
     * @access public
     */
    public function __construct($TransactionID)
    {
      $this->TransactionID = $TransactionID;
    }

}
