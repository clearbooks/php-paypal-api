<?php

namespace Paypal\Api;

class FlatShippingRateType
{

    /**
     * @var AmountType $AdditionalShippingCosts
     * @access public
     */
    public $AdditionalShippingCosts = null;

    /**
     * @var AmountType $FlatShippingHandlingCosts
     * @access public
     */
    public $FlatShippingHandlingCosts = null;

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
     * @var ShippingServiceCodeType $ShippingService
     * @access public
     */
    public $ShippingService = null;

    /**
     * @param AmountType $AdditionalShippingCosts
     * @param AmountType $FlatShippingHandlingCosts
     * @param AmountType $InsuranceFee
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param ShippingServiceCodeType $ShippingService
     * @access public
     */
    public function __construct($AdditionalShippingCosts, $FlatShippingHandlingCosts, $InsuranceFee, $InsuranceOption, $ShippingService)
    {
      $this->AdditionalShippingCosts = $AdditionalShippingCosts;
      $this->FlatShippingHandlingCosts = $FlatShippingHandlingCosts;
      $this->InsuranceFee = $InsuranceFee;
      $this->InsuranceOption = $InsuranceOption;
      $this->ShippingService = $ShippingService;
    }

}
