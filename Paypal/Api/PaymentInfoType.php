<?php

namespace Paypal\Api;

class PaymentInfoType
{

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var string $EbayTransactionID
     * @access public
     */
    public $EbayTransactionID = null;

    /**
     * @var TransactionId $ParentTransactionID
     * @access public
     */
    public $ParentTransactionID = null;

    /**
     * @var string $ReceiptID
     * @access public
     */
    public $ReceiptID = null;

    /**
     * @var PaymentTransactionCodeType $TransactionType
     * @access public
     */
    public $TransactionType = null;

    /**
     * @var PaymentCodeType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var RefundSourceCodeType $RefundSourceCodeType
     * @access public
     */
    public $RefundSourceCodeType = null;

    /**
     * @var dateTime $ExpectedeCheckClearDate
     * @access public
     */
    public $ExpectedeCheckClearDate = null;

    /**
     * @var dateTime $PaymentDate
     * @access public
     */
    public $PaymentDate = null;

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
     * @var BasicAmountType $FinancingFeeAmount
     * @access public
     */
    public $FinancingFeeAmount = null;

    /**
     * @var BasicAmountType $FinancingTotalCost
     * @access public
     */
    public $FinancingTotalCost = null;

    /**
     * @var BasicAmountType $FinancingMonthlyPayment
     * @access public
     */
    public $FinancingMonthlyPayment = null;

    /**
     * @var string $FinancingTerm
     * @access public
     */
    public $FinancingTerm = null;

    /**
     * @var string $IsFinancing
     * @access public
     */
    public $IsFinancing = null;

    /**
     * @var BasicAmountType $SettleAmount
     * @access public
     */
    public $SettleAmount = null;

    /**
     * @var BasicAmountType $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @var string $ExchangeRate
     * @access public
     */
    public $ExchangeRate = null;

    /**
     * @var PaymentStatusCodeType $PaymentStatus
     * @access public
     */
    public $PaymentStatus = null;

    /**
     * @var PendingStatusCodeType $PendingReason
     * @access public
     */
    public $PendingReason = null;

    /**
     * @var ReversalReasonCodeType $ReasonCode
     * @access public
     */
    public $ReasonCode = null;

    /**
     * @var string $HoldDecision
     * @access public
     */
    public $HoldDecision = null;

    /**
     * @var string $ShippingMethod
     * @access public
     */
    public $ShippingMethod = null;

    /**
     * @var string $ProtectionEligibility
     * @access public
     */
    public $ProtectionEligibility = null;

    /**
     * @var string $ProtectionEligibilityType
     * @access public
     */
    public $ProtectionEligibilityType = null;

    /**
     * @var string $ReceiptReferenceNumber
     * @access public
     */
    public $ReceiptReferenceNumber = null;

    /**
     * @var POSTransactionCodeType $POSTransactionType
     * @access public
     */
    public $POSTransactionType = null;

    /**
     * @var string $ShipAmount
     * @access public
     */
    public $ShipAmount = null;

    /**
     * @var string $ShipHandleAmount
     * @access public
     */
    public $ShipHandleAmount = null;

    /**
     * @var string $ShipDiscount
     * @access public
     */
    public $ShipDiscount = null;

    /**
     * @var string $InsuranceAmount
     * @access public
     */
    public $InsuranceAmount = null;

    /**
     * @var string $Subject
     * @access public
     */
    public $Subject = null;

    /**
     * @var string $StoreID
     * @access public
     */
    public $StoreID = null;

    /**
     * @var string $TerminalID
     * @access public
     */
    public $TerminalID = null;

    /**
     * @var SellerDetailsType $SellerDetails
     * @access public
     */
    public $SellerDetails = null;

    /**
     * @var string $PaymentRequestID
     * @access public
     */
    public $PaymentRequestID = null;

    /**
     * @var FMFDetailsType $FMFDetails
     * @access public
     */
    public $FMFDetails = null;

    /**
     * @var EnhancedPaymentInfoType $EnhancedPaymentInfo
     * @access public
     */
    public $EnhancedPaymentInfo = null;

    /**
     * @var ErrorType $PaymentError
     * @access public
     */
    public $PaymentError = null;

    /**
     * @var InstrumentDetailsType $InstrumentDetails
     * @access public
     */
    public $InstrumentDetails = null;

    /**
     * @var OfferDetailsType $OfferDetails
     * @access public
     */
    public $OfferDetails = null;

    /**
     * @var string $BinEligibility
     * @access public
     */
    public $BinEligibility = null;

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
     * @param string $TransactionID
     * @param string $EbayTransactionID
     * @param TransactionId $ParentTransactionID
     * @param string $ReceiptID
     * @param PaymentTransactionCodeType $TransactionType
     * @param PaymentCodeType $PaymentType
     * @param RefundSourceCodeType $RefundSourceCodeType
     * @param dateTime $ExpectedeCheckClearDate
     * @param dateTime $PaymentDate
     * @param BasicAmountType $GrossAmount
     * @param BasicAmountType $FeeAmount
     * @param BasicAmountType $FinancingFeeAmount
     * @param BasicAmountType $FinancingTotalCost
     * @param BasicAmountType $FinancingMonthlyPayment
     * @param string $FinancingTerm
     * @param string $IsFinancing
     * @param BasicAmountType $SettleAmount
     * @param BasicAmountType $TaxAmount
     * @param string $ExchangeRate
     * @param PaymentStatusCodeType $PaymentStatus
     * @param PendingStatusCodeType $PendingReason
     * @param ReversalReasonCodeType $ReasonCode
     * @param string $HoldDecision
     * @param string $ShippingMethod
     * @param string $ProtectionEligibility
     * @param string $ProtectionEligibilityType
     * @param string $ReceiptReferenceNumber
     * @param POSTransactionCodeType $POSTransactionType
     * @param string $ShipAmount
     * @param string $ShipHandleAmount
     * @param string $ShipDiscount
     * @param string $InsuranceAmount
     * @param string $Subject
     * @param string $StoreID
     * @param string $TerminalID
     * @param SellerDetailsType $SellerDetails
     * @param string $PaymentRequestID
     * @param FMFDetailsType $FMFDetails
     * @param EnhancedPaymentInfoType $EnhancedPaymentInfo
     * @param ErrorType $PaymentError
     * @param InstrumentDetailsType $InstrumentDetails
     * @param OfferDetailsType $OfferDetails
     * @param string $BinEligibility
     * @param string $SoftDescriptor
     * @param string $SoftDescriptorCity
     * @access public
     */
    public function __construct($TransactionID, $EbayTransactionID, $ParentTransactionID, $ReceiptID, $TransactionType, $PaymentType, $RefundSourceCodeType, $ExpectedeCheckClearDate, $PaymentDate, $GrossAmount, $FeeAmount, $FinancingFeeAmount, $FinancingTotalCost, $FinancingMonthlyPayment, $FinancingTerm, $IsFinancing, $SettleAmount, $TaxAmount, $ExchangeRate, $PaymentStatus, $PendingReason, $ReasonCode, $HoldDecision, $ShippingMethod, $ProtectionEligibility, $ProtectionEligibilityType, $ReceiptReferenceNumber, $POSTransactionType, $ShipAmount, $ShipHandleAmount, $ShipDiscount, $InsuranceAmount, $Subject, $StoreID, $TerminalID, $SellerDetails, $PaymentRequestID, $FMFDetails, $EnhancedPaymentInfo, $PaymentError, $InstrumentDetails, $OfferDetails, $BinEligibility, $SoftDescriptor, $SoftDescriptorCity)
    {
      $this->TransactionID = $TransactionID;
      $this->EbayTransactionID = $EbayTransactionID;
      $this->ParentTransactionID = $ParentTransactionID;
      $this->ReceiptID = $ReceiptID;
      $this->TransactionType = $TransactionType;
      $this->PaymentType = $PaymentType;
      $this->RefundSourceCodeType = $RefundSourceCodeType;
      $this->ExpectedeCheckClearDate = $ExpectedeCheckClearDate;
      $this->PaymentDate = $PaymentDate;
      $this->GrossAmount = $GrossAmount;
      $this->FeeAmount = $FeeAmount;
      $this->FinancingFeeAmount = $FinancingFeeAmount;
      $this->FinancingTotalCost = $FinancingTotalCost;
      $this->FinancingMonthlyPayment = $FinancingMonthlyPayment;
      $this->FinancingTerm = $FinancingTerm;
      $this->IsFinancing = $IsFinancing;
      $this->SettleAmount = $SettleAmount;
      $this->TaxAmount = $TaxAmount;
      $this->ExchangeRate = $ExchangeRate;
      $this->PaymentStatus = $PaymentStatus;
      $this->PendingReason = $PendingReason;
      $this->ReasonCode = $ReasonCode;
      $this->HoldDecision = $HoldDecision;
      $this->ShippingMethod = $ShippingMethod;
      $this->ProtectionEligibility = $ProtectionEligibility;
      $this->ProtectionEligibilityType = $ProtectionEligibilityType;
      $this->ReceiptReferenceNumber = $ReceiptReferenceNumber;
      $this->POSTransactionType = $POSTransactionType;
      $this->ShipAmount = $ShipAmount;
      $this->ShipHandleAmount = $ShipHandleAmount;
      $this->ShipDiscount = $ShipDiscount;
      $this->InsuranceAmount = $InsuranceAmount;
      $this->Subject = $Subject;
      $this->StoreID = $StoreID;
      $this->TerminalID = $TerminalID;
      $this->SellerDetails = $SellerDetails;
      $this->PaymentRequestID = $PaymentRequestID;
      $this->FMFDetails = $FMFDetails;
      $this->EnhancedPaymentInfo = $EnhancedPaymentInfo;
      $this->PaymentError = $PaymentError;
      $this->InstrumentDetails = $InstrumentDetails;
      $this->OfferDetails = $OfferDetails;
      $this->BinEligibility = $BinEligibility;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->SoftDescriptorCity = $SoftDescriptorCity;
    }

}
