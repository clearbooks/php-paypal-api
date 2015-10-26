<?php

namespace Paypal\Api;

class PaymentDetailsType
{

    /**
     * @var BasicAmountType $OrderTotal
     * @access public
     */
    public $OrderTotal = null;

    /**
     * @var BasicAmountType $ItemTotal
     * @access public
     */
    public $ItemTotal = null;

    /**
     * @var BasicAmountType $ShippingTotal
     * @access public
     */
    public $ShippingTotal = null;

    /**
     * @var BasicAmountType $HandlingTotal
     * @access public
     */
    public $HandlingTotal = null;

    /**
     * @var BasicAmountType $TaxTotal
     * @access public
     */
    public $TaxTotal = null;

    /**
     * @var string $OrderDescription
     * @access public
     */
    public $OrderDescription = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var string $ButtonSource
     * @access public
     */
    public $ButtonSource = null;

    /**
     * @var string $NotifyURL
     * @access public
     */
    public $NotifyURL = null;

    /**
     * @var AddressType $ShipToAddress
     * @access public
     */
    public $ShipToAddress = null;

    /**
     * @var string $MultiShipping
     * @access public
     */
    public $MultiShipping = null;

    /**
     * @var string $FulfillmentReferenceNumber
     * @access public
     */
    public $FulfillmentReferenceNumber = null;

    /**
     * @var AddressType $FulfillmentAddress
     * @access public
     */
    public $FulfillmentAddress = null;

    /**
     * @var PaymentCategoryType $PaymentCategoryType
     * @access public
     */
    public $PaymentCategoryType = null;

    /**
     * @var LocationType $LocationType
     * @access public
     */
    public $LocationType = null;

    /**
     * @var ShippingServiceCodeType $ShippingMethod
     * @access public
     */
    public $ShippingMethod = null;

    /**
     * @var dateTime $ProfileAddressChangeDate
     * @access public
     */
    public $ProfileAddressChangeDate = null;

    /**
     * @var PaymentDetailsItemType[] $PaymentDetailsItem
     * @access public
     */
    public $PaymentDetailsItem = null;

    /**
     * @var BasicAmountType $InsuranceTotal
     * @access public
     */
    public $InsuranceTotal = null;

    /**
     * @var BasicAmountType $ShippingDiscount
     * @access public
     */
    public $ShippingDiscount = null;

    /**
     * @var string $InsuranceOptionOffered
     * @access public
     */
    public $InsuranceOptionOffered = null;

    /**
     * @var AllowedPaymentMethodType $AllowedPaymentMethod
     * @access public
     */
    public $AllowedPaymentMethod = null;

    /**
     * @var EnhancedPaymentDataType $EnhancedPaymentData
     * @access public
     */
    public $EnhancedPaymentData = null;

    /**
     * @var SellerDetailsType $SellerDetails
     * @access public
     */
    public $SellerDetails = null;

    /**
     * @var string $NoteText
     * @access public
     */
    public $NoteText = null;

    /**
     * @var string $TransactionId
     * @access public
     */
    public $TransactionId = null;

    /**
     * @var PaymentActionCodeType $PaymentAction
     * @access public
     */
    public $PaymentAction = null;

    /**
     * @var string $PaymentRequestID
     * @access public
     */
    public $PaymentRequestID = null;

    /**
     * @var string $OrderURL
     * @access public
     */
    public $OrderURL = null;

    /**
     * @var string $SoftDescriptor
     * @access public
     */
    public $SoftDescriptor = null;

    /**
     * @var int $BranchLevel
     * @access public
     */
    public $BranchLevel = null;

    /**
     * @var OfferDetailsType $OfferDetails
     * @access public
     */
    public $OfferDetails = null;

    /**
     * @var RecurringFlagType $Recurring
     * @access public
     */
    public $Recurring = null;

    /**
     * @var PaymentReasonType $PaymentReason
     * @access public
     */
    public $PaymentReason = null;

    /**
     * @var string $LocationID
     * @access public
     */
    public $LocationID = null;

    /**
     * @var DiscountInfoType $RedeemedOffers
     * @access public
     */
    public $RedeemedOffers = null;

    /**
     * @var DiscountInfoType $CummulativePoints
     * @access public
     */
    public $CummulativePoints = null;

    /**
     * @var MerchantDataType $MerchantData
     * @access public
     */
    public $MerchantData = null;

    /**
     * @param BasicAmountType $OrderTotal
     * @param BasicAmountType $ItemTotal
     * @param BasicAmountType $ShippingTotal
     * @param BasicAmountType $HandlingTotal
     * @param BasicAmountType $TaxTotal
     * @param string $OrderDescription
     * @param string $Custom
     * @param string $InvoiceID
     * @param string $ButtonSource
     * @param string $NotifyURL
     * @param AddressType $ShipToAddress
     * @param string $MultiShipping
     * @param string $FulfillmentReferenceNumber
     * @param AddressType $FulfillmentAddress
     * @param PaymentCategoryType $PaymentCategoryType
     * @param LocationType $LocationType
     * @param ShippingServiceCodeType $ShippingMethod
     * @param dateTime $ProfileAddressChangeDate
     * @param PaymentDetailsItemType[] $PaymentDetailsItem
     * @param BasicAmountType $InsuranceTotal
     * @param BasicAmountType $ShippingDiscount
     * @param string $InsuranceOptionOffered
     * @param AllowedPaymentMethodType $AllowedPaymentMethod
     * @param EnhancedPaymentDataType $EnhancedPaymentData
     * @param SellerDetailsType $SellerDetails
     * @param string $NoteText
     * @param string $TransactionId
     * @param PaymentActionCodeType $PaymentAction
     * @param string $PaymentRequestID
     * @param string $OrderURL
     * @param string $SoftDescriptor
     * @param int $BranchLevel
     * @param OfferDetailsType $OfferDetails
     * @param RecurringFlagType $Recurring
     * @param PaymentReasonType $PaymentReason
     * @param string $LocationID
     * @param DiscountInfoType $RedeemedOffers
     * @param DiscountInfoType $CummulativePoints
     * @param MerchantDataType $MerchantData
     * @access public
     */
    public function __construct($OrderTotal, $ItemTotal, $ShippingTotal, $HandlingTotal, $TaxTotal, $OrderDescription, $Custom, $InvoiceID, $ButtonSource, $NotifyURL, $ShipToAddress, $MultiShipping, $FulfillmentReferenceNumber, $FulfillmentAddress, $PaymentCategoryType, $LocationType, $ShippingMethod, $ProfileAddressChangeDate, $PaymentDetailsItem, $InsuranceTotal, $ShippingDiscount, $InsuranceOptionOffered, $AllowedPaymentMethod, $EnhancedPaymentData, $SellerDetails, $NoteText, $TransactionId, $PaymentAction, $PaymentRequestID, $OrderURL, $SoftDescriptor, $BranchLevel, $OfferDetails, $Recurring, $PaymentReason, $LocationID, $RedeemedOffers, $CummulativePoints, $MerchantData)
    {
      $this->OrderTotal = $OrderTotal;
      $this->ItemTotal = $ItemTotal;
      $this->ShippingTotal = $ShippingTotal;
      $this->HandlingTotal = $HandlingTotal;
      $this->TaxTotal = $TaxTotal;
      $this->OrderDescription = $OrderDescription;
      $this->Custom = $Custom;
      $this->InvoiceID = $InvoiceID;
      $this->ButtonSource = $ButtonSource;
      $this->NotifyURL = $NotifyURL;
      $this->ShipToAddress = $ShipToAddress;
      $this->MultiShipping = $MultiShipping;
      $this->FulfillmentReferenceNumber = $FulfillmentReferenceNumber;
      $this->FulfillmentAddress = $FulfillmentAddress;
      $this->PaymentCategoryType = $PaymentCategoryType;
      $this->LocationType = $LocationType;
      $this->ShippingMethod = $ShippingMethod;
      $this->ProfileAddressChangeDate = $ProfileAddressChangeDate;
      $this->PaymentDetailsItem = $PaymentDetailsItem;
      $this->InsuranceTotal = $InsuranceTotal;
      $this->ShippingDiscount = $ShippingDiscount;
      $this->InsuranceOptionOffered = $InsuranceOptionOffered;
      $this->AllowedPaymentMethod = $AllowedPaymentMethod;
      $this->EnhancedPaymentData = $EnhancedPaymentData;
      $this->SellerDetails = $SellerDetails;
      $this->NoteText = $NoteText;
      $this->TransactionId = $TransactionId;
      $this->PaymentAction = $PaymentAction;
      $this->PaymentRequestID = $PaymentRequestID;
      $this->OrderURL = $OrderURL;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->BranchLevel = $BranchLevel;
      $this->OfferDetails = $OfferDetails;
      $this->Recurring = $Recurring;
      $this->PaymentReason = $PaymentReason;
      $this->LocationID = $LocationID;
      $this->RedeemedOffers = $RedeemedOffers;
      $this->CummulativePoints = $CummulativePoints;
      $this->MerchantData = $MerchantData;
    }

}
