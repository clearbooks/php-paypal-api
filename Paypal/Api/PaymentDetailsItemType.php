<?php

namespace Paypal\Api;

class PaymentDetailsItemType
{

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
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var BasicAmountType $Tax
     * @access public
     */
    public $Tax = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var EbayItemPaymentDetailsItemType $EbayItemPaymentDetailsItem
     * @access public
     */
    public $EbayItemPaymentDetailsItem = null;

    /**
     * @var string $PromoCode
     * @access public
     */
    public $PromoCode = null;

    /**
     * @var ProductCategoryType $ProductCategory
     * @access public
     */
    public $ProductCategory = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var MeasureType $ItemWeight
     * @access public
     */
    public $ItemWeight = null;

    /**
     * @var MeasureType $ItemLength
     * @access public
     */
    public $ItemLength = null;

    /**
     * @var MeasureType $ItemWidth
     * @access public
     */
    public $ItemWidth = null;

    /**
     * @var MeasureType $ItemHeight
     * @access public
     */
    public $ItemHeight = null;

    /**
     * @var string $ItemURL
     * @access public
     */
    public $ItemURL = null;

    /**
     * @var EnhancedItemDataType $EnhancedItemData
     * @access public
     */
    public $EnhancedItemData = null;

    /**
     * @var ItemCategoryType $ItemCategory
     * @access public
     */
    public $ItemCategory = null;

    /**
     * @param string $Name
     * @param string $Number
     * @param int $Quantity
     * @param BasicAmountType $Tax
     * @param BasicAmountType $Amount
     * @param EbayItemPaymentDetailsItemType $EbayItemPaymentDetailsItem
     * @param string $PromoCode
     * @param ProductCategoryType $ProductCategory
     * @param string $Description
     * @param MeasureType $ItemWeight
     * @param MeasureType $ItemLength
     * @param MeasureType $ItemWidth
     * @param MeasureType $ItemHeight
     * @param string $ItemURL
     * @param EnhancedItemDataType $EnhancedItemData
     * @param ItemCategoryType $ItemCategory
     * @access public
     */
    public function __construct($Name, $Number, $Quantity, $Tax, $Amount, $EbayItemPaymentDetailsItem, $PromoCode, $ProductCategory, $Description, $ItemWeight, $ItemLength, $ItemWidth, $ItemHeight, $ItemURL, $EnhancedItemData, $ItemCategory)
    {
      $this->Name = $Name;
      $this->Number = $Number;
      $this->Quantity = $Quantity;
      $this->Tax = $Tax;
      $this->Amount = $Amount;
      $this->EbayItemPaymentDetailsItem = $EbayItemPaymentDetailsItem;
      $this->PromoCode = $PromoCode;
      $this->ProductCategory = $ProductCategory;
      $this->Description = $Description;
      $this->ItemWeight = $ItemWeight;
      $this->ItemLength = $ItemLength;
      $this->ItemWidth = $ItemWidth;
      $this->ItemHeight = $ItemHeight;
      $this->ItemURL = $ItemURL;
      $this->EnhancedItemData = $EnhancedItemData;
      $this->ItemCategory = $ItemCategory;
    }

}
