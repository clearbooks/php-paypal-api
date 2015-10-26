<?php

namespace Paypal\Api;

class ShippingInfoType
{

    /**
     * @var string $ShippingMethod
     * @access public
     */
    public $ShippingMethod = null;

    /**
     * @var string $ShippingCarrier
     * @access public
     */
    public $ShippingCarrier = null;

    /**
     * @var BasicAmountType $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var BasicAmountType $HandlingAmount
     * @access public
     */
    public $HandlingAmount = null;

    /**
     * @var BasicAmountType $InsuranceAmount
     * @access public
     */
    public $InsuranceAmount = null;

    /**
     * @param string $ShippingMethod
     * @param string $ShippingCarrier
     * @param BasicAmountType $ShippingAmount
     * @param BasicAmountType $HandlingAmount
     * @param BasicAmountType $InsuranceAmount
     * @access public
     */
    public function __construct($ShippingMethod, $ShippingCarrier, $ShippingAmount, $HandlingAmount, $InsuranceAmount)
    {
      $this->ShippingMethod = $ShippingMethod;
      $this->ShippingCarrier = $ShippingCarrier;
      $this->ShippingAmount = $ShippingAmount;
      $this->HandlingAmount = $HandlingAmount;
      $this->InsuranceAmount = $InsuranceAmount;
    }

}
