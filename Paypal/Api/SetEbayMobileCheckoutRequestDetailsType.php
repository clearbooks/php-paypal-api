<?php

namespace Paypal\Api;

class SetEbayMobileCheckoutRequestDetailsType
{

    /**
     * @var EbayCheckoutType $CheckoutType
     * @access public
     */
    public $CheckoutType = null;

    /**
     * @var string $ItemId
     * @access public
     */
    public $ItemId = null;

    /**
     * @var string $TransactionId
     * @access public
     */
    public $TransactionId = null;

    /**
     * @var string $SiteId
     * @access public
     */
    public $SiteId = null;

    /**
     * @var string $BuyerId
     * @access public
     */
    public $BuyerId = null;

    /**
     * @var DyneticClientType $ClientType
     * @access public
     */
    public $ClientType = null;

    /**
     * @var PhoneNumberType $BuyerPhone
     * @access public
     */
    public $BuyerPhone = null;

    /**
     * @var string $ReturnURL
     * @access public
     */
    public $ReturnURL = null;

    /**
     * @var string $CancelURL
     * @access public
     */
    public $CancelURL = null;

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var BasicAmountType $ItemAmount
     * @access public
     */
    public $ItemAmount = null;

    /**
     * @param EbayCheckoutType $CheckoutType
     * @param string $ItemId
     * @param string $TransactionId
     * @param string $SiteId
     * @param string $BuyerId
     * @param DyneticClientType $ClientType
     * @param PhoneNumberType $BuyerPhone
     * @param string $ReturnURL
     * @param string $CancelURL
     * @param int $Quantity
     * @param BasicAmountType $ItemAmount
     * @access public
     */
    public function __construct($CheckoutType, $ItemId, $TransactionId, $SiteId, $BuyerId, $ClientType, $BuyerPhone, $ReturnURL, $CancelURL, $Quantity, $ItemAmount)
    {
      $this->CheckoutType = $CheckoutType;
      $this->ItemId = $ItemId;
      $this->TransactionId = $TransactionId;
      $this->SiteId = $SiteId;
      $this->BuyerId = $BuyerId;
      $this->ClientType = $ClientType;
      $this->BuyerPhone = $BuyerPhone;
      $this->ReturnURL = $ReturnURL;
      $this->CancelURL = $CancelURL;
      $this->Quantity = $Quantity;
      $this->ItemAmount = $ItemAmount;
    }

}
