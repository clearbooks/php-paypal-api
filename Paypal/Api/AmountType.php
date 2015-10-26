<?php

namespace Paypal\Api;

class AmountType
{

    /**
     * @var float $_
     * @access public
     */
    public $_ = null;

    /**
     * @var CurrencyCodeType $currencyID
     * @access public
     */
    public $currencyID = null;

    /**
     * @param float $_
     * @param CurrencyCodeType $currencyID
     * @access public
     */
    public function __construct($_, $currencyID)
    {
      $this->_ = $_;
      $this->currencyID = $currencyID;
    }

}
