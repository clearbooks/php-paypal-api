<?php

namespace Paypal\Api;

class ListingDetailsType
{

    /**
     * @var boolean $Adult
     * @access public
     */
    public $Adult = null;

    /**
     * @var boolean $BindingAuction
     * @access public
     */
    public $BindingAuction = null;

    /**
     * @var boolean $CheckoutEnabled
     * @access public
     */
    public $CheckoutEnabled = null;

    /**
     * @var AmountType $ConvertedBuyItNowPrice
     * @access public
     */
    public $ConvertedBuyItNowPrice = null;

    /**
     * @var AmountType $ConvertedStartPrice
     * @access public
     */
    public $ConvertedStartPrice = null;

    /**
     * @var AmountType $ConvertedReservePrice
     * @access public
     */
    public $ConvertedReservePrice = null;

    /**
     * @var boolean $HasReservePrice
     * @access public
     */
    public $HasReservePrice = null;

    /**
     * @var string $RegionName
     * @access public
     */
    public $RegionName = null;

    /**
     * @var ItemIDType $RelistedItemID
     * @access public
     */
    public $RelistedItemID = null;

    /**
     * @var ItemIDType $SecondChanceOriginalItemID
     * @access public
     */
    public $SecondChanceOriginalItemID = null;

    /**
     * @var dateTime $StartTime
     * @access public
     */
    public $StartTime = null;

    /**
     * @var dateTime $EndTime
     * @access public
     */
    public $EndTime = null;

    /**
     * @var anyURI $ViewItemURL
     * @access public
     */
    public $ViewItemURL = null;

    /**
     * @param boolean $Adult
     * @param boolean $BindingAuction
     * @param boolean $CheckoutEnabled
     * @param AmountType $ConvertedBuyItNowPrice
     * @param AmountType $ConvertedStartPrice
     * @param AmountType $ConvertedReservePrice
     * @param boolean $HasReservePrice
     * @param string $RegionName
     * @param ItemIDType $RelistedItemID
     * @param ItemIDType $SecondChanceOriginalItemID
     * @param dateTime $StartTime
     * @param dateTime $EndTime
     * @param anyURI $ViewItemURL
     * @access public
     */
    public function __construct($Adult, $BindingAuction, $CheckoutEnabled, $ConvertedBuyItNowPrice, $ConvertedStartPrice, $ConvertedReservePrice, $HasReservePrice, $RegionName, $RelistedItemID, $SecondChanceOriginalItemID, $StartTime, $EndTime, $ViewItemURL)
    {
      $this->Adult = $Adult;
      $this->BindingAuction = $BindingAuction;
      $this->CheckoutEnabled = $CheckoutEnabled;
      $this->ConvertedBuyItNowPrice = $ConvertedBuyItNowPrice;
      $this->ConvertedStartPrice = $ConvertedStartPrice;
      $this->ConvertedReservePrice = $ConvertedReservePrice;
      $this->HasReservePrice = $HasReservePrice;
      $this->RegionName = $RegionName;
      $this->RelistedItemID = $RelistedItemID;
      $this->SecondChanceOriginalItemID = $SecondChanceOriginalItemID;
      $this->StartTime = $StartTime;
      $this->EndTime = $EndTime;
      $this->ViewItemURL = $ViewItemURL;
    }

}
