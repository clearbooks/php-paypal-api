<?php

namespace Paypal\Api;

class ShippingDetailsType
{

    /**
     * @var boolean $AllowPaymentEdit
     * @access public
     */
    public $AllowPaymentEdit = null;

    /**
     * @var CalculatedShippingRateType $CalculatedShippingRate
     * @access public
     */
    public $CalculatedShippingRate = null;

    /**
     * @var boolean $ChangePaymentInstructions
     * @access public
     */
    public $ChangePaymentInstructions = null;

    /**
     * @var FlatShippingRateType[] $FlatShippingRate
     * @access public
     */
    public $FlatShippingRate = null;

    /**
     * @var AmountType $InsuranceTotal
     * @access public
     */
    public $InsuranceTotal = null;

    /**
     * @var boolean $InsuranceWanted
     * @access public
     */
    public $InsuranceWanted = null;

    /**
     * @var string $PaymentInstructions
     * @access public
     */
    public $PaymentInstructions = null;

    /**
     * @var SalesTaxType $SalesTax
     * @access public
     */
    public $SalesTax = null;

    /**
     * @var string $SellerPostalCode
     * @access public
     */
    public $SellerPostalCode = null;

    /**
     * @param boolean $AllowPaymentEdit
     * @param CalculatedShippingRateType $CalculatedShippingRate
     * @param boolean $ChangePaymentInstructions
     * @param FlatShippingRateType[] $FlatShippingRate
     * @param AmountType $InsuranceTotal
     * @param boolean $InsuranceWanted
     * @param string $PaymentInstructions
     * @param SalesTaxType $SalesTax
     * @param string $SellerPostalCode
     * @access public
     */
    public function __construct($AllowPaymentEdit, $CalculatedShippingRate, $ChangePaymentInstructions, $FlatShippingRate, $InsuranceTotal, $InsuranceWanted, $PaymentInstructions, $SalesTax, $SellerPostalCode)
    {
      $this->AllowPaymentEdit = $AllowPaymentEdit;
      $this->CalculatedShippingRate = $CalculatedShippingRate;
      $this->ChangePaymentInstructions = $ChangePaymentInstructions;
      $this->FlatShippingRate = $FlatShippingRate;
      $this->InsuranceTotal = $InsuranceTotal;
      $this->InsuranceWanted = $InsuranceWanted;
      $this->PaymentInstructions = $PaymentInstructions;
      $this->SalesTax = $SalesTax;
      $this->SellerPostalCode = $SellerPostalCode;
    }

}
