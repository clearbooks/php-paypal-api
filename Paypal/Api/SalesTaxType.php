<?php

namespace Paypal\Api;

class SalesTaxType
{

    /**
     * @var float $SalesTaxPercent
     * @access public
     */
    public $SalesTaxPercent = null;

    /**
     * @var string $SalesTaxState
     * @access public
     */
    public $SalesTaxState = null;

    /**
     * @var boolean $ShippingIncludedInTax
     * @access public
     */
    public $ShippingIncludedInTax = null;

    /**
     * @param float $SalesTaxPercent
     * @param string $SalesTaxState
     * @param boolean $ShippingIncludedInTax
     * @access public
     */
    public function __construct($SalesTaxPercent, $SalesTaxState, $ShippingIncludedInTax)
    {
      $this->SalesTaxPercent = $SalesTaxPercent;
      $this->SalesTaxState = $SalesTaxState;
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
    }

}
