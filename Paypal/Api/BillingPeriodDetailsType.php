<?php

namespace Paypal\Api;

class BillingPeriodDetailsType
{

    /**
     * @var BillingPeriodType $BillingPeriod
     * @access public
     */
    public $BillingPeriod = null;

    /**
     * @var int $BillingFrequency
     * @access public
     */
    public $BillingFrequency = null;

    /**
     * @var int $TotalBillingCycles
     * @access public
     */
    public $TotalBillingCycles = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var BasicAmountType $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var BasicAmountType $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @param BillingPeriodType $BillingPeriod
     * @param int $BillingFrequency
     * @param int $TotalBillingCycles
     * @param BasicAmountType $Amount
     * @param BasicAmountType $ShippingAmount
     * @param BasicAmountType $TaxAmount
     * @access public
     */
    public function __construct($BillingPeriod, $BillingFrequency, $TotalBillingCycles, $Amount, $ShippingAmount, $TaxAmount)
    {
      $this->BillingPeriod = $BillingPeriod;
      $this->BillingFrequency = $BillingFrequency;
      $this->TotalBillingCycles = $TotalBillingCycles;
      $this->Amount = $Amount;
      $this->ShippingAmount = $ShippingAmount;
      $this->TaxAmount = $TaxAmount;
    }

}
