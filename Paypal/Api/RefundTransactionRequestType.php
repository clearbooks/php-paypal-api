<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class RefundTransactionRequestType extends AbstractRequestType
{

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var UserIDType $PayerID
     * @access public
     */
    public $PayerID = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var RefundType $RefundType
     * @access public
     */
    public $RefundType = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var BasicAmountType $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var BasicAmountType $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @var string $Memo
     * @access public
     */
    public $Memo = null;

    /**
     * @var dateTime $RetryUntil
     * @access public
     */
    public $RetryUntil = null;

    /**
     * @var RefundSourceCodeType $RefundSource
     * @access public
     */
    public $RefundSource = null;

    /**
     * @var boolean $RefundAdvice
     * @access public
     */
    public $RefundAdvice = null;

    /**
     * @var MerchantStoreDetailsType $MerchantStoreDetails
     * @access public
     */
    public $MerchantStoreDetails = null;

    /**
     * @var InvoiceItemType $RefundItemDetails
     * @access public
     */
    public $RefundItemDetails = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @var MerchantDataType $MerchantData
     * @access public
     */
    public $MerchantData = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param TransactionId $TransactionID
     * @param UserIDType $PayerID
     * @param string $InvoiceID
     * @param RefundType $RefundType
     * @param BasicAmountType $Amount
     * @param BasicAmountType $ShippingAmount
     * @param BasicAmountType $TaxAmount
     * @param string $Memo
     * @param dateTime $RetryUntil
     * @param RefundSourceCodeType $RefundSource
     * @param boolean $RefundAdvice
     * @param MerchantStoreDetailsType $MerchantStoreDetails
     * @param InvoiceItemType $RefundItemDetails
     * @param string $MsgSubID
     * @param MerchantDataType $MerchantData
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $TransactionID, $PayerID, $InvoiceID, $RefundType, $Amount, $ShippingAmount, $TaxAmount, $Memo, $RetryUntil, $RefundSource, $RefundAdvice, $MerchantStoreDetails, $RefundItemDetails, $MsgSubID, $MerchantData)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->TransactionID = $TransactionID;
      $this->PayerID = $PayerID;
      $this->InvoiceID = $InvoiceID;
      $this->RefundType = $RefundType;
      $this->Amount = $Amount;
      $this->ShippingAmount = $ShippingAmount;
      $this->TaxAmount = $TaxAmount;
      $this->Memo = $Memo;
      $this->RetryUntil = $RetryUntil;
      $this->RefundSource = $RefundSource;
      $this->RefundAdvice = $RefundAdvice;
      $this->MerchantStoreDetails = $MerchantStoreDetails;
      $this->RefundItemDetails = $RefundItemDetails;
      $this->MsgSubID = $MsgSubID;
      $this->MerchantData = $MerchantData;
    }

}
