<?php

namespace Paypal\Api;

class DoReferenceTransactionResponseDetailsType
{

    /**
     * @var string $BillingAgreementID
     * @access public
     */
    public $BillingAgreementID = null;

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

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
     * @var string $PaymentAdviceCode
     * @access public
     */
    public $PaymentAdviceCode = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @param string $BillingAgreementID
     * @param PaymentInfoType $PaymentInfo
     * @param BasicAmountType $Amount
     * @param string $AVSCode
     * @param string $CVV2Code
     * @param TransactionId $TransactionID
     * @param string $PaymentAdviceCode
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($BillingAgreementID, $PaymentInfo, $Amount, $AVSCode, $CVV2Code, $TransactionID, $PaymentAdviceCode, $MsgSubID)
    {
      $this->BillingAgreementID = $BillingAgreementID;
      $this->PaymentInfo = $PaymentInfo;
      $this->Amount = $Amount;
      $this->AVSCode = $AVSCode;
      $this->CVV2Code = $CVV2Code;
      $this->TransactionID = $TransactionID;
      $this->PaymentAdviceCode = $PaymentAdviceCode;
      $this->MsgSubID = $MsgSubID;
    }

}
