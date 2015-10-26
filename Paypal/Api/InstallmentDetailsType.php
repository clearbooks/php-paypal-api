<?php

namespace Paypal\Api;

class InstallmentDetailsType
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
     * @var string $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var string $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @param BillingPeriodType $BillingPeriod
     * @param int $BillingFrequency
     * @param int $TotalBillingCycles
     * @param string $Amount
     * @param string $ShippingAmount
     * @param string $TaxAmount
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
