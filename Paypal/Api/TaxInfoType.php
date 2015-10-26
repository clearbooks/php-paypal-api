<?php

namespace Paypal\Api;

class TaxInfoType
{

    /**
     * @var BasicAmountType $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @var string $SalesTaxPercentage
     * @access public
     */
    public $SalesTaxPercentage = null;

    /**
     * @var string $TaxState
     * @access public
     */
    public $TaxState = null;

    /**
     * @param BasicAmountType $TaxAmount
     * @param string $SalesTaxPercentage
     * @param string $TaxState
     * @access public
     */
    public function __construct($TaxAmount, $SalesTaxPercentage, $TaxState)
    {
      $this->TaxAmount = $TaxAmount;
      $this->SalesTaxPercentage = $SalesTaxPercentage;
      $this->TaxState = $TaxState;
    }

}
