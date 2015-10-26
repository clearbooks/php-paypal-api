<?php

namespace Paypal\Api;

class AuctionInfoType
{

    /**
     * @var string $BuyerID
     * @access public
     */
    public $BuyerID = null;

    /**
     * @var dateTime $ClosingDate
     * @access public
     */
    public $ClosingDate = null;

    /**
     * @var string $multiItem
     * @access public
     */
    public $multiItem = null;

    /**
     * @param string $BuyerID
     * @param dateTime $ClosingDate
     * @param string $multiItem
     * @access public
     */
    public function __construct($BuyerID, $ClosingDate, $multiItem)
    {
      $this->BuyerID = $BuyerID;
      $this->ClosingDate = $ClosingDate;
      $this->multiItem = $multiItem;
    }

}
