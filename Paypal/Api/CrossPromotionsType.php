<?php

namespace Paypal\Api;

class CrossPromotionsType
{

    /**
     * @var ItemIDType $ItemID
     * @access public
     */
    public $ItemID = null;

    /**
     * @var PromotionSchemeCodeType $PrimaryScheme
     * @access public
     */
    public $PrimaryScheme = null;

    /**
     * @var PromotionMethodCodeType $PromotionMethod
     * @access public
     */
    public $PromotionMethod = null;

    /**
     * @var string $SellerID
     * @access public
     */
    public $SellerID = null;

    /**
     * @var boolean $ShippingDiscount
     * @access public
     */
    public $ShippingDiscount = null;

    /**
     * @var string $SellerKey
     * @access public
     */
    public $SellerKey = null;

    /**
     * @var string $StoreName
     * @access public
     */
    public $StoreName = null;

    /**
     * @var PromotedItemType[] $PromotedItem
     * @access public
     */
    public $PromotedItem = null;

    /**
     * @param ItemIDType $ItemID
     * @param PromotionSchemeCodeType $PrimaryScheme
     * @param PromotionMethodCodeType $PromotionMethod
     * @param string $SellerID
     * @param boolean $ShippingDiscount
     * @param string $SellerKey
     * @param string $StoreName
     * @param PromotedItemType[] $PromotedItem
     * @access public
     */
    public function __construct($ItemID, $PrimaryScheme, $PromotionMethod, $SellerID, $ShippingDiscount, $SellerKey, $StoreName, $PromotedItem)
    {
      $this->ItemID = $ItemID;
      $this->PrimaryScheme = $PrimaryScheme;
      $this->PromotionMethod = $PromotionMethod;
      $this->SellerID = $SellerID;
      $this->ShippingDiscount = $ShippingDiscount;
      $this->SellerKey = $SellerKey;
      $this->StoreName = $StoreName;
      $this->PromotedItem = $PromotedItem;
    }

}
