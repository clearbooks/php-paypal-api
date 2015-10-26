<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class RefundTransactionResponseType extends AbstractResponseType
{

    /**
     * @var TransactionId $RefundTransactionID
     * @access public
     */
    public $RefundTransactionID = null;

    /**
     * @var BasicAmountType $NetRefundAmount
     * @access public
     */
    public $NetRefundAmount = null;

    /**
     * @var BasicAmountType $FeeRefundAmount
     * @access public
     */
    public $FeeRefundAmount = null;

    /**
     * @var BasicAmountType $GrossRefundAmount
     * @access public
     */
    public $GrossRefundAmount = null;

    /**
     * @var BasicAmountType $TotalRefundedAmount
     * @access public
     */
    public $TotalRefundedAmount = null;

    /**
     * @var RefundInfoType $RefundInfo
     * @access public
     */
    public $RefundInfo = null;

    /**
     * @var string $ReceiptData
     * @access public
     */
    public $ReceiptData = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param BasicAmountType $NetRefundAmount
     * @param BasicAmountType $FeeRefundAmount
     * @param BasicAmountType $GrossRefundAmount
     * @param BasicAmountType $TotalRefundedAmount
     * @param RefundInfoType $RefundInfo
     * @param string $ReceiptData
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $NetRefundAmount, $FeeRefundAmount, $GrossRefundAmount, $TotalRefundedAmount, $RefundInfo, $ReceiptData, $MsgSubID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->NetRefundAmount = $NetRefundAmount;
      $this->FeeRefundAmount = $FeeRefundAmount;
      $this->GrossRefundAmount = $GrossRefundAmount;
      $this->TotalRefundedAmount = $TotalRefundedAmount;
      $this->RefundInfo = $RefundInfo;
      $this->ReceiptData = $ReceiptData;
      $this->MsgSubID = $MsgSubID;
    }

}
