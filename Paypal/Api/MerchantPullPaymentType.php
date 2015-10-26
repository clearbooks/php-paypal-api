<?php

namespace Paypal\Api;

class MerchantPullPaymentType
{

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var MerchantPullIDType $MpID
     * @access public
     */
    public $MpID = null;

    /**
     * @var MerchantPullPaymentCodeType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var string $Memo
     * @access public
     */
    public $Memo = null;

    /**
     * @var string $EmailSubject
     * @access public
     */
    public $EmailSubject = null;

    /**
     * @var BasicAmountType $Tax
     * @access public
     */
    public $Tax = null;

    /**
     * @var BasicAmountType $Shipping
     * @access public
     */
    public $Shipping = null;

    /**
     * @var BasicAmountType $Handling
     * @access public
     */
    public $Handling = null;

    /**
     * @var string $ItemName
     * @access public
     */
    public $ItemName = null;

    /**
     * @var string $ItemNumber
     * @access public
     */
    public $ItemNumber = null;

    /**
     * @var string $Invoice
     * @access public
     */
    public $Invoice = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $ButtonSource
     * @access public
     */
    public $ButtonSource = null;

    /**
     * @var string $SoftDescriptor
     * @access public
     */
    public $SoftDescriptor = null;

    /**
     * @param BasicAmountType $Amount
     * @param MerchantPullIDType $MpID
     * @param MerchantPullPaymentCodeType $PaymentType
     * @param string $Memo
     * @param string $EmailSubject
     * @param BasicAmountType $Tax
     * @param BasicAmountType $Shipping
     * @param BasicAmountType $Handling
     * @param string $ItemName
     * @param string $ItemNumber
     * @param string $Invoice
     * @param string $Custom
     * @param string $ButtonSource
     * @param string $SoftDescriptor
     * @access public
     */
    public function __construct($Amount, $MpID, $PaymentType, $Memo, $EmailSubject, $Tax, $Shipping, $Handling, $ItemName, $ItemNumber, $Invoice, $Custom, $ButtonSource, $SoftDescriptor)
    {
      $this->Amount = $Amount;
      $this->MpID = $MpID;
      $this->PaymentType = $PaymentType;
      $this->Memo = $Memo;
      $this->EmailSubject = $EmailSubject;
      $this->Tax = $Tax;
      $this->Shipping = $Shipping;
      $this->Handling = $Handling;
      $this->ItemName = $ItemName;
      $this->ItemNumber = $ItemNumber;
      $this->Invoice = $Invoice;
      $this->Custom = $Custom;
      $this->ButtonSource = $ButtonSource;
      $this->SoftDescriptor = $SoftDescriptor;
    }

}
