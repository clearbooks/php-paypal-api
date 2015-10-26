<?php

namespace Paypal\Api;

class PaymentTransactionSearchResultType
{

    /**
     * @var dateTime $Timestamp
     * @access public
     */
    public $Timestamp = null;

    /**
     * @var string $Timezone
     * @access public
     */
    public $Timezone = null;

    /**
     * @var string $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var EmailAddressType $Payer
     * @access public
     */
    public $Payer = null;

    /**
     * @var string $PayerDisplayName
     * @access public
     */
    public $PayerDisplayName = null;

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var BasicAmountType $GrossAmount
     * @access public
     */
    public $GrossAmount = null;

    /**
     * @var BasicAmountType $FeeAmount
     * @access public
     */
    public $FeeAmount = null;

    /**
     * @var BasicAmountType $NetAmount
     * @access public
     */
    public $NetAmount = null;

    /**
     * @param dateTime $Timestamp
     * @param string $Timezone
     * @param string $Type
     * @param EmailAddressType $Payer
     * @param string $PayerDisplayName
     * @param string $TransactionID
     * @param string $Status
     * @param BasicAmountType $GrossAmount
     * @param BasicAmountType $FeeAmount
     * @param BasicAmountType $NetAmount
     * @access public
     */
    public function __construct($Timestamp, $Timezone, $Type, $Payer, $PayerDisplayName, $TransactionID, $Status, $GrossAmount, $FeeAmount, $NetAmount)
    {
      $this->Timestamp = $Timestamp;
      $this->Timezone = $Timezone;
      $this->Type = $Type;
      $this->Payer = $Payer;
      $this->PayerDisplayName = $PayerDisplayName;
      $this->TransactionID = $TransactionID;
      $this->Status = $Status;
      $this->GrossAmount = $GrossAmount;
      $this->FeeAmount = $FeeAmount;
      $this->NetAmount = $NetAmount;
    }

}
