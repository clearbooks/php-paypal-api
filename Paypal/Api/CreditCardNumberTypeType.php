<?php

namespace Paypal\Api;

class CreditCardNumberTypeType
{

    /**
     * @var CreditCardTypeType $CreditCardType
     * @access public
     */
    public $CreditCardType = null;

    /**
     * @var string $CreditCardNumber
     * @access public
     */
    public $CreditCardNumber = null;

    /**
     * @param CreditCardTypeType $CreditCardType
     * @param string $CreditCardNumber
     * @access public
     */
    public function __construct($CreditCardType, $CreditCardNumber)
    {
      $this->CreditCardType = $CreditCardType;
      $this->CreditCardNumber = $CreditCardNumber;
    }

}
