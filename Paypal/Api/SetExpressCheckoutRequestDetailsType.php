<?php

namespace Paypal\Api;

class SetExpressCheckoutRequestDetailsType
{

    /**
     * @var BasicAmountType $OrderTotal
     * @access public
     */
    public $OrderTotal = null;

    /**
     * @var string $ReturnURL
     * @access public
     */
    public $ReturnURL = null;

    /**
     * @var string $CancelURL
     * @access public
     */
    public $CancelURL = null;

    /**
     * @var string $TrackingImageURL
     * @access public
     */
    public $TrackingImageURL = null;

    /**
     * @var string $giropaySuccessURL
     * @access public
     */
    public $giropaySuccessURL = null;

    /**
     * @var string $giropayCancelURL
     * @access public
     */
    public $giropayCancelURL = null;

    /**
     * @var string $BanktxnPendingURL
     * @access public
     */
    public $BanktxnPendingURL = null;

    /**
     * @var ExpressCheckoutTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var BasicAmountType $MaxAmount
     * @access public
     */
    public $MaxAmount = null;

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
     * @var string $ReqConfirmShipping
     * @access public
     */
    public $ReqConfirmShipping = null;

    /**
     * @var string $ReqBillingAddress
     * @access public
     */
    public $ReqBillingAddress = null;

    /**
     * @var AddressType $BillingAddress
     * @access public
     */
    public $BillingAddress = null;

    /**
     * @var string $NoShipping
     * @access public
     */
    public $NoShipping = null;

    /**
     * @var string $AddressOverride
     * @access public
     */
    public $AddressOverride = null;

    /**
     * @var string $LocaleCode
     * @access public
     */
    public $LocaleCode = null;

    /**
     * @var string $PageStyle
     * @access public
     */
    public $PageStyle = null;

    /**
     * @var string $cppheaderimage
     * @access public
     */
    public $cppheaderimage = null;

    /**
     * @var string $cppheaderbordercolor
     * @access public
     */
    public $cppheaderbordercolor = null;

    /**
     * @var string $cppheaderbackcolor
     * @access public
     */
    public $cppheaderbackcolor = null;

    /**
     * @var string $cpppayflowcolor
     * @access public
     */
    public $cpppayflowcolor = null;

    /**
     * @var string $cppcartbordercolor
     * @access public
     */
    public $cppcartbordercolor = null;

    /**
     * @var string $cpplogoimage
     * @access public
     */
    public $cpplogoimage = null;

    /**
     * @var AddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var PaymentActionCodeType $PaymentAction
     * @access public
     */
    public $PaymentAction = null;

    /**
     * @var SolutionTypeType $SolutionType
     * @access public
     */
    public $SolutionType = null;

    /**
     * @var LandingPageType $LandingPage
     * @access public
     */
    public $LandingPage = null;

    /**
     * @var EmailAddressType $BuyerEmail
     * @access public
     */
    public $BuyerEmail = null;

    /**
     * @var ChannelType $ChannelType
     * @access public
     */
    public $ChannelType = null;

    /**
     * @var BillingAgreementDetailsType[] $BillingAgreementDetails
     * @access public
     */
    public $BillingAgreementDetails = null;

    /**
     * @var string[] $PromoCodes
     * @access public
     */
    public $PromoCodes = null;

    /**
     * @var string $PayPalCheckOutBtnType
     * @access public
     */
    public $PayPalCheckOutBtnType = null;

    /**
     * @var ProductCategoryType $ProductCategory
     * @access public
     */
    public $ProductCategory = null;

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
     * @var string $AllowNote
     * @access public
     */
    public $AllowNote = null;

    /**
     * @var FundingSourceDetailsType $FundingSourceDetails
     * @access public
     */
    public $FundingSourceDetails = null;

    /**
     * @var string $BrandName
     * @access public
     */
    public $BrandName = null;

    /**
     * @var string $CallbackURL
     * @access public
     */
    public $CallbackURL = null;

    /**
     * @var EnhancedCheckoutDataType $EnhancedCheckoutData
     * @access public
     */
    public $EnhancedCheckoutData = null;

    /**
     * @var OtherPaymentMethodDetailsType[] $OtherPaymentMethods
     * @access public
     */
    public $OtherPaymentMethods = null;

    /**
     * @var BuyerDetailsType $BuyerDetails
     * @access public
     */
    public $BuyerDetails = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     * @access public
     */
    public $PaymentDetails = null;

    /**
     * @var ShippingOptionType[] $FlatRateShippingOptions
     * @access public
     */
    public $FlatRateShippingOptions = null;

    /**
     * @var string $CallbackTimeout
     * @access public
     */
    public $CallbackTimeout = null;

    /**
     * @var string $CallbackVersion
     * @access public
     */
    public $CallbackVersion = null;

    /**
     * @var string $CustomerServiceNumber
     * @access public
     */
    public $CustomerServiceNumber = null;

    /**
     * @var string $GiftMessageEnable
     * @access public
     */
    public $GiftMessageEnable = null;

    /**
     * @var string $GiftReceiptEnable
     * @access public
     */
    public $GiftReceiptEnable = null;

    /**
     * @var string $GiftWrapEnable
     * @access public
     */
    public $GiftWrapEnable = null;

    /**
     * @var string $GiftWrapName
     * @access public
     */
    public $GiftWrapName = null;

    /**
     * @var BasicAmountType $GiftWrapAmount
     * @access public
     */
    public $GiftWrapAmount = null;

    /**
     * @var string $BuyerEmailOptInEnable
     * @access public
     */
    public $BuyerEmailOptInEnable = null;

    /**
     * @var string $SurveyEnable
     * @access public
     */
    public $SurveyEnable = null;

    /**
     * @var string $SurveyQuestion
     * @access public
     */
    public $SurveyQuestion = null;

    /**
     * @var string[] $SurveyChoice
     * @access public
     */
    public $SurveyChoice = null;

    /**
     * @var TotalType $TotalType
     * @access public
     */
    public $TotalType = null;

    /**
     * @var string $NoteToBuyer
     * @access public
     */
    public $NoteToBuyer = null;

    /**
     * @var IncentiveInfoType[] $Incentives
     * @access public
     */
    public $Incentives = null;

    /**
     * @var string $ReqInstrumentDetails
     * @access public
     */
    public $ReqInstrumentDetails = null;

    /**
     * @var ExternalRememberMeOptInDetailsType $ExternalRememberMeOptInDetails
     * @access public
     */
    public $ExternalRememberMeOptInDetails = null;

    /**
     * @var FlowControlDetailsType $FlowControlDetails
     * @access public
     */
    public $FlowControlDetails = null;

    /**
     * @var DisplayControlDetailsType $DisplayControlDetails
     * @access public
     */
    public $DisplayControlDetails = null;

    /**
     * @var ExternalPartnerTrackingDetailsType $ExternalPartnerTrackingDetails
     * @access public
     */
    public $ExternalPartnerTrackingDetails = null;

    /**
     * @var CoupledBucketsType $CoupledBuckets
     * @access public
     */
    public $CoupledBuckets = null;

    /**
     * @param BasicAmountType $OrderTotal
     * @param string $ReturnURL
     * @param string $CancelURL
     * @param string $TrackingImageURL
     * @param string $giropaySuccessURL
     * @param string $giropayCancelURL
     * @param string $BanktxnPendingURL
     * @param ExpressCheckoutTokenType $Token
     * @param BasicAmountType $MaxAmount
     * @param string $OrderDescription
     * @param string $Custom
     * @param string $InvoiceID
     * @param string $ReqConfirmShipping
     * @param string $ReqBillingAddress
     * @param AddressType $BillingAddress
     * @param string $NoShipping
     * @param string $AddressOverride
     * @param string $LocaleCode
     * @param string $PageStyle
     * @param string $cppheaderimage
     * @param string $cppheaderbordercolor
     * @param string $cppheaderbackcolor
     * @param string $cpppayflowcolor
     * @param string $cppcartbordercolor
     * @param string $cpplogoimage
     * @param AddressType $Address
     * @param PaymentActionCodeType $PaymentAction
     * @param SolutionTypeType $SolutionType
     * @param LandingPageType $LandingPage
     * @param EmailAddressType $BuyerEmail
     * @param ChannelType $ChannelType
     * @param BillingAgreementDetailsType[] $BillingAgreementDetails
     * @param string[] $PromoCodes
     * @param string $PayPalCheckOutBtnType
     * @param ProductCategoryType $ProductCategory
     * @param ShippingServiceCodeType $ShippingMethod
     * @param dateTime $ProfileAddressChangeDate
     * @param string $AllowNote
     * @param FundingSourceDetailsType $FundingSourceDetails
     * @param string $BrandName
     * @param string $CallbackURL
     * @param EnhancedCheckoutDataType $EnhancedCheckoutData
     * @param OtherPaymentMethodDetailsType[] $OtherPaymentMethods
     * @param BuyerDetailsType $BuyerDetails
     * @param PaymentDetailsType $PaymentDetails
     * @param ShippingOptionType[] $FlatRateShippingOptions
     * @param string $CallbackTimeout
     * @param string $CallbackVersion
     * @param string $CustomerServiceNumber
     * @param string $GiftMessageEnable
     * @param string $GiftReceiptEnable
     * @param string $GiftWrapEnable
     * @param string $GiftWrapName
     * @param BasicAmountType $GiftWrapAmount
     * @param string $BuyerEmailOptInEnable
     * @param string $SurveyEnable
     * @param string $SurveyQuestion
     * @param string[] $SurveyChoice
     * @param TotalType $TotalType
     * @param string $NoteToBuyer
     * @param IncentiveInfoType[] $Incentives
     * @param string $ReqInstrumentDetails
     * @param ExternalRememberMeOptInDetailsType $ExternalRememberMeOptInDetails
     * @param FlowControlDetailsType $FlowControlDetails
     * @param DisplayControlDetailsType $DisplayControlDetails
     * @param ExternalPartnerTrackingDetailsType $ExternalPartnerTrackingDetails
     * @param CoupledBucketsType $CoupledBuckets
     * @access public
     */
    public function __construct($OrderTotal, $ReturnURL, $CancelURL, $TrackingImageURL, $giropaySuccessURL, $giropayCancelURL, $BanktxnPendingURL, $Token, $MaxAmount, $OrderDescription, $Custom, $InvoiceID, $ReqConfirmShipping, $ReqBillingAddress, $BillingAddress, $NoShipping, $AddressOverride, $LocaleCode, $PageStyle, $cppheaderimage, $cppheaderbordercolor, $cppheaderbackcolor, $cpppayflowcolor, $cppcartbordercolor, $cpplogoimage, $Address, $PaymentAction, $SolutionType, $LandingPage, $BuyerEmail, $ChannelType, $BillingAgreementDetails, $PromoCodes, $PayPalCheckOutBtnType, $ProductCategory, $ShippingMethod, $ProfileAddressChangeDate, $AllowNote, $FundingSourceDetails, $BrandName, $CallbackURL, $EnhancedCheckoutData, $OtherPaymentMethods, $BuyerDetails, $PaymentDetails, $FlatRateShippingOptions, $CallbackTimeout, $CallbackVersion, $CustomerServiceNumber, $GiftMessageEnable, $GiftReceiptEnable, $GiftWrapEnable, $GiftWrapName, $GiftWrapAmount, $BuyerEmailOptInEnable, $SurveyEnable, $SurveyQuestion, $SurveyChoice, $TotalType, $NoteToBuyer, $Incentives, $ReqInstrumentDetails, $ExternalRememberMeOptInDetails, $FlowControlDetails, $DisplayControlDetails, $ExternalPartnerTrackingDetails, $CoupledBuckets)
    {
      $this->OrderTotal = $OrderTotal;
      $this->ReturnURL = $ReturnURL;
      $this->CancelURL = $CancelURL;
      $this->TrackingImageURL = $TrackingImageURL;
      $this->giropaySuccessURL = $giropaySuccessURL;
      $this->giropayCancelURL = $giropayCancelURL;
      $this->BanktxnPendingURL = $BanktxnPendingURL;
      $this->Token = $Token;
      $this->MaxAmount = $MaxAmount;
      $this->OrderDescription = $OrderDescription;
      $this->Custom = $Custom;
      $this->InvoiceID = $InvoiceID;
      $this->ReqConfirmShipping = $ReqConfirmShipping;
      $this->ReqBillingAddress = $ReqBillingAddress;
      $this->BillingAddress = $BillingAddress;
      $this->NoShipping = $NoShipping;
      $this->AddressOverride = $AddressOverride;
      $this->LocaleCode = $LocaleCode;
      $this->PageStyle = $PageStyle;
      $this->cppheaderimage = $cppheaderimage;
      $this->cppheaderbordercolor = $cppheaderbordercolor;
      $this->cppheaderbackcolor = $cppheaderbackcolor;
      $this->cpppayflowcolor = $cpppayflowcolor;
      $this->cppcartbordercolor = $cppcartbordercolor;
      $this->cpplogoimage = $cpplogoimage;
      $this->Address = $Address;
      $this->PaymentAction = $PaymentAction;
      $this->SolutionType = $SolutionType;
      $this->LandingPage = $LandingPage;
      $this->BuyerEmail = $BuyerEmail;
      $this->ChannelType = $ChannelType;
      $this->BillingAgreementDetails = $BillingAgreementDetails;
      $this->PromoCodes = $PromoCodes;
      $this->PayPalCheckOutBtnType = $PayPalCheckOutBtnType;
      $this->ProductCategory = $ProductCategory;
      $this->ShippingMethod = $ShippingMethod;
      $this->ProfileAddressChangeDate = $ProfileAddressChangeDate;
      $this->AllowNote = $AllowNote;
      $this->FundingSourceDetails = $FundingSourceDetails;
      $this->BrandName = $BrandName;
      $this->CallbackURL = $CallbackURL;
      $this->EnhancedCheckoutData = $EnhancedCheckoutData;
      $this->OtherPaymentMethods = $OtherPaymentMethods;
      $this->BuyerDetails = $BuyerDetails;
      $this->PaymentDetails = $PaymentDetails;
      $this->FlatRateShippingOptions = $FlatRateShippingOptions;
      $this->CallbackTimeout = $CallbackTimeout;
      $this->CallbackVersion = $CallbackVersion;
      $this->CustomerServiceNumber = $CustomerServiceNumber;
      $this->GiftMessageEnable = $GiftMessageEnable;
      $this->GiftReceiptEnable = $GiftReceiptEnable;
      $this->GiftWrapEnable = $GiftWrapEnable;
      $this->GiftWrapName = $GiftWrapName;
      $this->GiftWrapAmount = $GiftWrapAmount;
      $this->BuyerEmailOptInEnable = $BuyerEmailOptInEnable;
      $this->SurveyEnable = $SurveyEnable;
      $this->SurveyQuestion = $SurveyQuestion;
      $this->SurveyChoice = $SurveyChoice;
      $this->TotalType = $TotalType;
      $this->NoteToBuyer = $NoteToBuyer;
      $this->Incentives = $Incentives;
      $this->ReqInstrumentDetails = $ReqInstrumentDetails;
      $this->ExternalRememberMeOptInDetails = $ExternalRememberMeOptInDetails;
      $this->FlowControlDetails = $FlowControlDetails;
      $this->DisplayControlDetails = $DisplayControlDetails;
      $this->ExternalPartnerTrackingDetails = $ExternalPartnerTrackingDetails;
      $this->CoupledBuckets = $CoupledBuckets;
    }

}
