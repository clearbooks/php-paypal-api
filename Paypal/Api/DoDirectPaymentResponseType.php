<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoDirectPaymentResponseType extends AbstractResponseType
{

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $AVSCode
     * @access public
     */
    public $AVSCode = null;

    /**
     * @var string $CVV2Code
     * @access public
     */
    public $CVV2Code = null;

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var PendingStatusCodeType $PendingReason
     * @access public
     */
    public $PendingReason = null;

    /**
     * @var PaymentStatusCodeType $PaymentStatus
     * @access public
     */
    public $PaymentStatus = null;

    /**
     * @var FMFDetailsType $FMFDetails
     * @access public
     */
    public $FMFDetails = null;

    /**
     * @var ThreeDSecureResponseType $ThreeDSecureResponse
     * @access public
     */
    public $ThreeDSecureResponse = null;

    /**
     * @var string $PaymentAdviceCode
     * @access public
     */
    public $PaymentAdviceCode = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param BasicAmountType $Amount
     * @param string $AVSCode
     * @param string $CVV2Code
     * @param TransactionId $TransactionID
     * @param PendingStatusCodeType $PendingReason
     * @param PaymentStatusCodeType $PaymentStatus
     * @param FMFDetailsType $FMFDetails
     * @param ThreeDSecureResponseType $ThreeDSecureResponse
     * @param string $PaymentAdviceCode
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Amount, $AVSCode, $CVV2Code, $TransactionID, $PendingReason, $PaymentStatus, $FMFDetails, $ThreeDSecureResponse, $PaymentAdviceCode)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Amount = $Amount;
      $this->AVSCode = $AVSCode;
      $this->CVV2Code = $CVV2Code;
      $this->TransactionID = $TransactionID;
      $this->PendingReason = $PendingReason;
      $this->PaymentStatus = $PaymentStatus;
      $this->FMFDetails = $FMFDetails;
      $this->ThreeDSecureResponse = $ThreeDSecureResponse;
      $this->PaymentAdviceCode = $PaymentAdviceCode;
    }

}
