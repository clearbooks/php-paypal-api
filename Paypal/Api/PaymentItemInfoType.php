<?php

namespace Paypal\Api;

class PaymentItemInfoType
{

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $Memo
     * @access public
     */
    public $Memo = null;

    /**
     * @var string $SalesTax
     * @access public
     */
    public $SalesTax = null;

    /**
     * @var PaymentItemType[] $PaymentItem
     * @access public
     */
    public $PaymentItem = null;

    /**
     * @var SubscriptionInfoType $Subscription
     * @access public
     */
    public $Subscription = null;

    /**
     * @var AuctionInfoType $Auction
     * @access public
     */
    public $Auction = null;

    /**
     * @param string $InvoiceID
     * @param string $Custom
     * @param string $Memo
     * @param string $SalesTax
     * @param PaymentItemType[] $PaymentItem
     * @param SubscriptionInfoType $Subscription
     * @param AuctionInfoType $Auction
     * @access public
     */
    public function __construct($InvoiceID, $Custom, $Memo, $SalesTax, $PaymentItem, $Subscription, $Auction)
    {
      $this->InvoiceID = $InvoiceID;
      $this->Custom = $Custom;
      $this->Memo = $Memo;
      $this->SalesTax = $SalesTax;
      $this->PaymentItem = $PaymentItem;
      $this->Subscription = $Subscription;
      $this->Auction = $Auction;
    }

}
