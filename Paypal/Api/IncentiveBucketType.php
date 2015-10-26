<?php

namespace Paypal\Api;

class IncentiveBucketType
{

    /**
     * @var IncentiveItemType[] $Items
     * @access public
     */
    public $Items = null;

    /**
     * @var string $BucketId
     * @access public
     */
    public $BucketId = null;

    /**
     * @var string $SellerId
     * @access public
     */
    public $SellerId = null;

    /**
     * @var string $ExternalSellerId
     * @access public
     */
    public $ExternalSellerId = null;

    /**
     * @var BasicAmountType $BucketSubtotalAmt
     * @access public
     */
    public $BucketSubtotalAmt = null;

    /**
     * @var BasicAmountType $BucketShippingAmt
     * @access public
     */
    public $BucketShippingAmt = null;

    /**
     * @var BasicAmountType $BucketInsuranceAmt
     * @access public
     */
    public $BucketInsuranceAmt = null;

    /**
     * @var BasicAmountType $BucketSalesTaxAmt
     * @access public
     */
    public $BucketSalesTaxAmt = null;

    /**
     * @var BasicAmountType $BucketTotalAmt
     * @access public
     */
    public $BucketTotalAmt = null;

    /**
     * @param IncentiveItemType[] $Items
     * @param string $BucketId
     * @param string $SellerId
     * @param string $ExternalSellerId
     * @param BasicAmountType $BucketSubtotalAmt
     * @param BasicAmountType $BucketShippingAmt
     * @param BasicAmountType $BucketInsuranceAmt
     * @param BasicAmountType $BucketSalesTaxAmt
     * @param BasicAmountType $BucketTotalAmt
     * @access public
     */
    public function __construct($Items, $BucketId, $SellerId, $ExternalSellerId, $BucketSubtotalAmt, $BucketShippingAmt, $BucketInsuranceAmt, $BucketSalesTaxAmt, $BucketTotalAmt)
    {
      $this->Items = $Items;
      $this->BucketId = $BucketId;
      $this->SellerId = $SellerId;
      $this->ExternalSellerId = $ExternalSellerId;
      $this->BucketSubtotalAmt = $BucketSubtotalAmt;
      $this->BucketShippingAmt = $BucketShippingAmt;
      $this->BucketInsuranceAmt = $BucketInsuranceAmt;
      $this->BucketSalesTaxAmt = $BucketSalesTaxAmt;
      $this->BucketTotalAmt = $BucketTotalAmt;
    }

}
