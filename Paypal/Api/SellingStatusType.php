<?php

namespace Paypal\Api;

class SellingStatusType
{

    /**
     * @var int $BidCount
     * @access public
     */
    public $BidCount = null;

    /**
     * @var AmountType $BidIncrement
     * @access public
     */
    public $BidIncrement = null;

    /**
     * @var AmountType $ConvertedCurrentPrice
     * @access public
     */
    public $ConvertedCurrentPrice = null;

    /**
     * @var AmountType $CurrentPrice
     * @access public
     */
    public $CurrentPrice = null;

    /**
     * @var UserType $HighBidder
     * @access public
     */
    public $HighBidder = null;

    /**
     * @var int $LeadCount
     * @access public
     */
    public $LeadCount = null;

    /**
     * @var AmountType $MinimumToBid
     * @access public
     */
    public $MinimumToBid = null;

    /**
     * @var int $QuantitySold
     * @access public
     */
    public $QuantitySold = null;

    /**
     * @var boolean $ReserveMet
     * @access public
     */
    public $ReserveMet = null;

    /**
     * @var boolean $SecondChanceEligible
     * @access public
     */
    public $SecondChanceEligible = null;

    /**
     * @param int $BidCount
     * @param AmountType $BidIncrement
     * @param AmountType $ConvertedCurrentPrice
     * @param AmountType $CurrentPrice
     * @param UserType $HighBidder
     * @param int $LeadCount
     * @param AmountType $MinimumToBid
     * @param int $QuantitySold
     * @param boolean $ReserveMet
     * @param boolean $SecondChanceEligible
     * @access public
     */
    public function __construct($BidCount, $BidIncrement, $ConvertedCurrentPrice, $CurrentPrice, $HighBidder, $LeadCount, $MinimumToBid, $QuantitySold, $ReserveMet, $SecondChanceEligible)
    {
      $this->BidCount = $BidCount;
      $this->BidIncrement = $BidIncrement;
      $this->ConvertedCurrentPrice = $ConvertedCurrentPrice;
      $this->CurrentPrice = $CurrentPrice;
      $this->HighBidder = $HighBidder;
      $this->LeadCount = $LeadCount;
      $this->MinimumToBid = $MinimumToBid;
      $this->QuantitySold = $QuantitySold;
      $this->ReserveMet = $ReserveMet;
      $this->SecondChanceEligible = $SecondChanceEligible;
    }

}
