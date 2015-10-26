<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class TransactionSearchRequestType extends AbstractRequestType
{

    /**
     * @var dateTime $StartDate
     * @access public
     */
    public $StartDate = null;

    /**
     * @var dateTime $EndDate
     * @access public
     */
    public $EndDate = null;

    /**
     * @var EmailAddressType $Payer
     * @access public
     */
    public $Payer = null;

    /**
     * @var EmailAddressType $Receiver
     * @access public
     */
    public $Receiver = null;

    /**
     * @var string $ReceiptID
     * @access public
     */
    public $ReceiptID = null;

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @var PersonNameType $PayerName
     * @access public
     */
    public $PayerName = null;

    /**
     * @var string $AuctionItemNumber
     * @access public
     */
    public $AuctionItemNumber = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var PaymentTransactionClassCodeType $TransactionClass
     * @access public
     */
    public $TransactionClass = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var CurrencyCodeType $CurrencyCode
     * @access public
     */
    public $CurrencyCode = null;

    /**
     * @var PaymentTransactionStatusCodeType $Status
     * @access public
     */
    public $Status = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param dateTime $StartDate
     * @param dateTime $EndDate
     * @param EmailAddressType $Payer
     * @param EmailAddressType $Receiver
     * @param string $ReceiptID
     * @param TransactionId $TransactionID
     * @param string $ProfileID
     * @param PersonNameType $PayerName
     * @param string $AuctionItemNumber
     * @param string $InvoiceID
     * @param string $CardNumber
     * @param PaymentTransactionClassCodeType $TransactionClass
     * @param BasicAmountType $Amount
     * @param CurrencyCodeType $CurrencyCode
     * @param PaymentTransactionStatusCodeType $Status
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $StartDate, $EndDate, $Payer, $Receiver, $ReceiptID, $TransactionID, $ProfileID, $PayerName, $AuctionItemNumber, $InvoiceID, $CardNumber, $TransactionClass, $Amount, $CurrencyCode, $Status)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->Payer = $Payer;
      $this->Receiver = $Receiver;
      $this->ReceiptID = $ReceiptID;
      $this->TransactionID = $TransactionID;
      $this->ProfileID = $ProfileID;
      $this->PayerName = $PayerName;
      $this->AuctionItemNumber = $AuctionItemNumber;
      $this->InvoiceID = $InvoiceID;
      $this->CardNumber = $CardNumber;
      $this->TransactionClass = $TransactionClass;
      $this->Amount = $Amount;
      $this->CurrencyCode = $CurrencyCode;
      $this->Status = $Status;
    }

}
