<?php

namespace Paypal\Api;

class PaymentItemType
{

    /**
     * @var string $EbayItemTxnId
     * @access public
     */
    public $EbayItemTxnId = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $Number
     * @access public
     */
    public $Number = null;

    /**
     * @var string $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var string $SalesTax
     * @access public
     */
    public $SalesTax = null;

    /**
     * @var string $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var string $HandlingAmount
     * @access public
     */
    public $HandlingAmount = null;

    /**
     * @var InvoiceItemType $InvoiceItemDetails
     * @access public
     */
    public $InvoiceItemDetails = null;

    /**
     * @var string $CouponID
     * @access public
     */
    public $CouponID = null;

    /**
     * @var string $CouponAmount
     * @access public
     */
    public $CouponAmount = null;

    /**
     * @var string $CouponAmountCurrency
     * @access public
     */
    public $CouponAmountCurrency = null;

    /**
     * @var string $LoyaltyCardDiscountAmount
     * @access public
     */
    public $LoyaltyCardDiscountAmount = null;

    /**
     * @var string $LoyaltyCardDiscountCurrency
     * @access public
     */
    public $LoyaltyCardDiscountCurrency = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var OptionType[] $Options
     * @access public
     */
    public $Options = null;

    /**
     * @param string $EbayItemTxnId
     * @param string $Name
     * @param string $Number
     * @param string $Quantity
     * @param string $SalesTax
     * @param string $ShippingAmount
     * @param string $HandlingAmount
     * @param InvoiceItemType $InvoiceItemDetails
     * @param string $CouponID
     * @param string $CouponAmount
     * @param string $CouponAmountCurrency
     * @param string $LoyaltyCardDiscountAmount
     * @param string $LoyaltyCardDiscountCurrency
     * @param BasicAmountType $Amount
     * @param OptionType[] $Options
     * @access public
     */
    public function __construct($EbayItemTxnId, $Name, $Number, $Quantity, $SalesTax, $ShippingAmount, $HandlingAmount, $InvoiceItemDetails, $CouponID, $CouponAmount, $CouponAmountCurrency, $LoyaltyCardDiscountAmount, $LoyaltyCardDiscountCurrency, $Amount, $Options)
    {
      $this->EbayItemTxnId = $EbayItemTxnId;
      $this->Name = $Name;
      $this->Number = $Number;
      $this->Quantity = $Quantity;
      $this->SalesTax = $SalesTax;
      $this->ShippingAmount = $ShippingAmount;
      $this->HandlingAmount = $HandlingAmount;
      $this->InvoiceItemDetails = $InvoiceItemDetails;
      $this->CouponID = $CouponID;
      $this->CouponAmount = $CouponAmount;
      $this->CouponAmountCurrency = $CouponAmountCurrency;
      $this->LoyaltyCardDiscountAmount = $LoyaltyCardDiscountAmount;
      $this->LoyaltyCardDiscountCurrency = $LoyaltyCardDiscountCurrency;
      $this->Amount = $Amount;
      $this->Options = $Options;
    }

}
