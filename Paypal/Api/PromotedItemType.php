<?php

namespace Paypal\Api;

class PromotedItemType
{

    /**
     * @var ItemIDType $ItemID
     * @access public
     */
    public $ItemID = null;

    /**
     * @var string $PictureURL
     * @access public
     */
    public $PictureURL = null;

    /**
     * @var int $position
     * @access public
     */
    public $position = null;

    /**
     * @var AmountType $PromotionPrice
     * @access public
     */
    public $PromotionPrice = null;

    /**
     * @var PromotionItemPriceTypeCodeType $PromotionPriceType
     * @access public
     */
    public $PromotionPriceType = null;

    /**
     * @var PromotionItemSelectionCodeType $SelectionType
     * @access public
     */
    public $SelectionType = null;

    /**
     * @var string $Title
     * @access public
     */
    public $Title = null;

    /**
     * @var ListingTypeCodeType $ListingType
     * @access public
     */
    public $ListingType = null;

    /**
     * @param ItemIDType $ItemID
     * @param string $PictureURL
     * @param int $position
     * @param AmountType $PromotionPrice
     * @param PromotionItemPriceTypeCodeType $PromotionPriceType
     * @param PromotionItemSelectionCodeType $SelectionType
     * @param string $Title
     * @param ListingTypeCodeType $ListingType
     * @access public
     */
    public function __construct($ItemID, $PictureURL, $position, $PromotionPrice, $PromotionPriceType, $SelectionType, $Title, $ListingType)
    {
      $this->ItemID = $ItemID;
      $this->PictureURL = $PictureURL;
      $this->position = $position;
      $this->PromotionPrice = $PromotionPrice;
      $this->PromotionPriceType = $PromotionPriceType;
      $this->SelectionType = $SelectionType;
      $this->Title = $Title;
      $this->ListingType = $ListingType;
    }

}
