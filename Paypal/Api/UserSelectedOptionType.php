<?php

namespace Paypal\Api;

class UserSelectedOptionType
{

    /**
     * @var string $ShippingCalculationMode
     * @access public
     */
    public $ShippingCalculationMode = null;

    /**
     * @var string $InsuranceOptionSelected
     * @access public
     */
    public $InsuranceOptionSelected = null;

    /**
     * @var string $ShippingOptionIsDefault
     * @access public
     */
    public $ShippingOptionIsDefault = null;

    /**
     * @var BasicAmountType $ShippingOptionAmount
     * @access public
     */
    public $ShippingOptionAmount = null;

    /**
     * @var string $ShippingOptionName
     * @access public
     */
    public $ShippingOptionName = null;

    /**
     * @var string $ScheduledShippingDate
     * @access public
     */
    public $ScheduledShippingDate = null;

    /**
     * @var string $ScheduledShippingPeriod
     * @access public
     */
    public $ScheduledShippingPeriod = null;

    /**
     * @param string $ShippingCalculationMode
     * @param string $InsuranceOptionSelected
     * @param string $ShippingOptionIsDefault
     * @param BasicAmountType $ShippingOptionAmount
     * @param string $ShippingOptionName
     * @param string $ScheduledShippingDate
     * @param string $ScheduledShippingPeriod
     * @access public
     */
    public function __construct($ShippingCalculationMode, $InsuranceOptionSelected, $ShippingOptionIsDefault, $ShippingOptionAmount, $ShippingOptionName, $ScheduledShippingDate, $ScheduledShippingPeriod)
    {
      $this->ShippingCalculationMode = $ShippingCalculationMode;
      $this->InsuranceOptionSelected = $InsuranceOptionSelected;
      $this->ShippingOptionIsDefault = $ShippingOptionIsDefault;
      $this->ShippingOptionAmount = $ShippingOptionAmount;
      $this->ShippingOptionName = $ShippingOptionName;
      $this->ScheduledShippingDate = $ScheduledShippingDate;
      $this->ScheduledShippingPeriod = $ScheduledShippingPeriod;
    }

}
