<?php

namespace Paypal\Api;

class AdditionalAccountType
{

    /**
     * @var AmountType $Balance
     * @access public
     */
    public $Balance = null;

    /**
     * @var CurrencyCodeType $Currency
     * @access public
     */
    public $Currency = null;

    /**
     * @var string $AccountCode
     * @access public
     */
    public $AccountCode = null;

    /**
     * @param AmountType $Balance
     * @param CurrencyCodeType $Currency
     * @param string $AccountCode
     * @access public
     */
    public function __construct($Balance, $Currency, $AccountCode)
    {
      $this->Balance = $Balance;
      $this->Currency = $Currency;
      $this->AccountCode = $AccountCode;
    }

}
