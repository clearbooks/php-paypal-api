<?php

namespace Paypal\Api;

class BasicAmountType
{

    /**
     * @var string $_
     * @access public
     */
    public $_ = null;

    /**
     * @var CurrencyCodeType $currencyID
     * @access public
     */
    public $currencyID = null;

    /**
     * @param string $_
     * @param CurrencyCodeType $currencyID
     * @access public
     */
    public function __construct($_, $currencyID)
    {
      $this->_ = $_;
      $this->currencyID = $currencyID;
    }

}
