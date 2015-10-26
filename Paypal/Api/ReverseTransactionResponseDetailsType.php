<?php

namespace Paypal\Api;

class ReverseTransactionResponseDetailsType
{

    /**
     * @var TransactionId $ReverseTransactionID
     * @access public
     */
    public $ReverseTransactionID = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @param string $Status
     * @access public
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
    }

}
