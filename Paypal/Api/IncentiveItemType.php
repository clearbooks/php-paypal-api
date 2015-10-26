<?php

namespace Paypal\Api;

class IncentiveItemType
{

    /**
     * @var string $ItemId
     * @access public
     */
    public $ItemId = null;

    /**
     * @var dateTime $PurchaseTime
     * @access public
     */
    public $PurchaseTime = null;

    /**
     * @var string $ItemCategoryList
     * @access public
     */
    public $ItemCategoryList = null;

    /**
     * @var BasicAmountType $ItemPrice
     * @access public
     */
    public $ItemPrice = null;

    /**
     * @var int $ItemQuantity
     * @access public
     */
    public $ItemQuantity = null;

    /**
     * @param string $ItemId
     * @param dateTime $PurchaseTime
     * @param string $ItemCategoryList
     * @param BasicAmountType $ItemPrice
     * @param int $ItemQuantity
     * @access public
     */
    public function __construct($ItemId, $PurchaseTime, $ItemCategoryList, $ItemPrice, $ItemQuantity)
    {
      $this->ItemId = $ItemId;
      $this->PurchaseTime = $PurchaseTime;
      $this->ItemCategoryList = $ItemCategoryList;
      $this->ItemPrice = $ItemPrice;
      $this->ItemQuantity = $ItemQuantity;
    }

}
