<?php

namespace Paypal\Api;

class ShippingCarrierDetailsType
{

    /**
     * @var AmountType $CarrierShippingFee
     * @access public
     */
    public $CarrierShippingFee = null;

    /**
     * @var AmountType $InsuranceFee
     * @access public
     */
    public $InsuranceFee = null;

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     * @access public
     */
    public $InsuranceOption = null;

    /**
     * @var AmountType $PackagingHandlingCosts
     * @access public
     */
    public $PackagingHandlingCosts = null;

    /**
     * @var string $ShippingRateErrorMessage
     * @access public
     */
    public $ShippingRateErrorMessage = null;

    /**
     * @var ShippingServiceCodeType $ShippingService
     * @access public
     */
    public $ShippingService = null;

    /**
     * @param AmountType $CarrierShippingFee
     * @param AmountType $InsuranceFee
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param AmountType $PackagingHandlingCosts
     * @param string $ShippingRateErrorMessage
     * @param ShippingServiceCodeType $ShippingService
     * @access public
     */
    public function __construct($CarrierShippingFee, $InsuranceFee, $InsuranceOption, $PackagingHandlingCosts, $ShippingRateErrorMessage, $ShippingService)
    {
      $this->CarrierShippingFee = $CarrierShippingFee;
      $this->InsuranceFee = $InsuranceFee;
      $this->InsuranceOption = $InsuranceOption;
      $this->PackagingHandlingCosts = $PackagingHandlingCosts;
      $this->ShippingRateErrorMessage = $ShippingRateErrorMessage;
      $this->ShippingService = $ShippingService;
    }

}
