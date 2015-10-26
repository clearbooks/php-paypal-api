<?php

namespace Paypal\Api;

class DoReferenceTransactionRequestDetailsType
{

    /**
     * @var string $ReferenceID
     * @access public
     */
    public $ReferenceID = null;

    /**
     * @var PaymentActionCodeType $PaymentAction
     * @access public
     */
    public $PaymentAction = null;

    /**
     * @var MerchantPullPaymentCodeType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     * @access public
     */
    public $PaymentDetails = null;

    /**
     * @var ReferenceCreditCardDetailsType $CreditCard
     * @access public
     */
    public $CreditCard = null;

    /**
     * @var string $IPAddress
     * @access public
     */
    public $IPAddress = null;

    /**
     * @var string $RiskSessionCorrelationID
     * @access public
     */
    public $RiskSessionCorrelationID = null;

    /**
     * @var string $MerchantSessionId
     * @access public
     */
    public $MerchantSessionId = null;

    /**
     * @var string $ReqConfirmShipping
     * @access public
     */
    public $ReqConfirmShipping = null;

    /**
     * @var string $SoftDescriptor
     * @access public
     */
    public $SoftDescriptor = null;

    /**
     * @var string $SoftDescriptorCity
     * @access public
     */
    public $SoftDescriptorCity = null;

    /**
     * @var SenderDetailsType $SenderDetails
     * @access public
     */
    public $SenderDetails = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @param string $ReferenceID
     * @param PaymentActionCodeType $PaymentAction
     * @param MerchantPullPaymentCodeType $PaymentType
     * @param PaymentDetailsType $PaymentDetails
     * @param ReferenceCreditCardDetailsType $CreditCard
     * @param string $IPAddress
     * @param string $RiskSessionCorrelationID
     * @param string $MerchantSessionId
     * @param string $ReqConfirmShipping
     * @param string $SoftDescriptor
     * @param string $SoftDescriptorCity
     * @param SenderDetailsType $SenderDetails
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($ReferenceID, $PaymentAction, $PaymentType, $PaymentDetails, $CreditCard, $IPAddress, $RiskSessionCorrelationID, $MerchantSessionId, $ReqConfirmShipping, $SoftDescriptor, $SoftDescriptorCity, $SenderDetails, $MsgSubID)
    {
      $this->ReferenceID = $ReferenceID;
      $this->PaymentAction = $PaymentAction;
      $this->PaymentType = $PaymentType;
      $this->PaymentDetails = $PaymentDetails;
      $this->CreditCard = $CreditCard;
      $this->IPAddress = $IPAddress;
      $this->RiskSessionCorrelationID = $RiskSessionCorrelationID;
      $this->MerchantSessionId = $MerchantSessionId;
      $this->ReqConfirmShipping = $ReqConfirmShipping;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->SoftDescriptorCity = $SoftDescriptorCity;
      $this->SenderDetails = $SenderDetails;
      $this->MsgSubID = $MsgSubID;
    }

}
