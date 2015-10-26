<?php

namespace Paypal\Api;

class TransactionType
{

    /**
     * @var AmountType $AmountPaid
     * @access public
     */
    public $AmountPaid = null;

    /**
     * @var UserType $Buyer
     * @access public
     */
    public $Buyer = null;

    /**
     * @var ShippingDetailsType $ShippingDetails
     * @access public
     */
    public $ShippingDetails = null;

    /**
     * @var AmountType $ConvertedAmountPaid
     * @access public
     */
    public $ConvertedAmountPaid = null;

    /**
     * @var AmountType $ConvertedTransactionPrice
     * @access public
     */
    public $ConvertedTransactionPrice = null;

    /**
     * @var dateTime $CreatedDate
     * @access public
     */
    public $CreatedDate = null;

    /**
     * @var DepositTypeCodeType $DepositType
     * @access public
     */
    public $DepositType = null;

    /**
     * @var ItemType $Item
     * @access public
     */
    public $Item = null;

    /**
     * @var int $QuantityPurchased
     * @access public
     */
    public $QuantityPurchased = null;

    /**
     * @var AmountType $ShippingHandlingTotal
     * @access public
     */
    public $ShippingHandlingTotal = null;

    /**
     * @var TransactionStatusType $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var string $AuthorizationID
     * @access public
     */
    public $AuthorizationID = null;

    /**
     * @var AmountType $TransactionPrice
     * @access public
     */
    public $TransactionPrice = null;

    /**
     * @var float $VATPercent
     * @access public
     */
    public $VATPercent = null;

    /**
     * @param AmountType $AmountPaid
     * @param UserType $Buyer
     * @param ShippingDetailsType $ShippingDetails
     * @param AmountType $ConvertedAmountPaid
     * @param AmountType $ConvertedTransactionPrice
     * @param dateTime $CreatedDate
     * @param DepositTypeCodeType $DepositType
     * @param ItemType $Item
     * @param int $QuantityPurchased
     * @param AmountType $ShippingHandlingTotal
     * @param TransactionStatusType $Status
     * @param string $TransactionID
     * @param string $AuthorizationID
     * @param AmountType $TransactionPrice
     * @param float $VATPercent
     * @access public
     */
    public function __construct($AmountPaid, $Buyer, $ShippingDetails, $ConvertedAmountPaid, $ConvertedTransactionPrice, $CreatedDate, $DepositType, $Item, $QuantityPurchased, $ShippingHandlingTotal, $Status, $TransactionID, $AuthorizationID, $TransactionPrice, $VATPercent)
    {
      $this->AmountPaid = $AmountPaid;
      $this->Buyer = $Buyer;
      $this->ShippingDetails = $ShippingDetails;
      $this->ConvertedAmountPaid = $ConvertedAmountPaid;
      $this->ConvertedTransactionPrice = $ConvertedTransactionPrice;
      $this->CreatedDate = $CreatedDate;
      $this->DepositType = $DepositType;
      $this->Item = $Item;
      $this->QuantityPurchased = $QuantityPurchased;
      $this->ShippingHandlingTotal = $ShippingHandlingTotal;
      $this->Status = $Status;
      $this->TransactionID = $TransactionID;
      $this->AuthorizationID = $AuthorizationID;
      $this->TransactionPrice = $TransactionPrice;
      $this->VATPercent = $VATPercent;
    }

}
