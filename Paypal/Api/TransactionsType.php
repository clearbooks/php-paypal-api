<?php

namespace Paypal\Api;

class TransactionsType
{

    /**
     * @var TransactionType $Transaction
     * @access public
     */
    public $Transaction = null;

    /**
     * @param TransactionType $Transaction
     * @access public
     */
    public function __construct($Transaction)
    {
      $this->Transaction = $Transaction;
    }

}
