<?php

namespace Paypal\Api;

class EbayItemPaymentDetailsItemType
{

    /**
     * @var string $ItemNumber
     * @access public
     */
    public $ItemNumber = null;

    /**
     * @var string $AuctionTransactionId
     * @access public
     */
    public $AuctionTransactionId = null;

    /**
     * @var string $OrderId
     * @access public
     */
    public $OrderId = null;

    /**
     * @var string $CartID
     * @access public
     */
    public $CartID = null;

    /**
     * @param string $ItemNumber
     * @param string $AuctionTransactionId
     * @param string $OrderId
     * @param string $CartID
     * @access public
     */
    public function __construct($ItemNumber, $AuctionTransactionId, $OrderId, $CartID)
    {
      $this->ItemNumber = $ItemNumber;
      $this->AuctionTransactionId = $AuctionTransactionId;
      $this->OrderId = $OrderId;
      $this->CartID = $CartID;
    }

}
