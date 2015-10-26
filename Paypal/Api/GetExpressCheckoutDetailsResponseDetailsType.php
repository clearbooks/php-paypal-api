<?php

namespace Paypal\Api;

class GetExpressCheckoutDetailsResponseDetailsType
{

    /**
     * @var ExpressCheckoutTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var PayerInfoType $PayerInfo
     * @access public
     */
    public $PayerInfo = null;

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
     * @var string $ContactPhone
     * @access public
     */
    public $ContactPhone = null;

    /**
     * @var boolean $BillingAgreementAcceptedStatus
     * @access public
     */
    public $BillingAgreementAcceptedStatus = null;

    /**
     * @var string $RedirectRequired
     * @access public
     */
    public $RedirectRequired = null;

    /**
     * @var AddressType $BillingAddress
     * @access public
     */
    public $BillingAddress = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var string $CheckoutStatus
     * @access public
     */
    public $CheckoutStatus = null;

    /**
     * @var BasicAmountType $PayPalAdjustment
     * @access public
     */
    public $PayPalAdjustment = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     * @access public
     */
    public $PaymentDetails = null;

    /**
     * @var UserSelectedOptionType $UserSelectedOptions
     * @access public
     */
    public $UserSelectedOptions = null;

    /**
     * @var IncentiveDetailsType[] $IncentiveDetails
     * @access public
     */
    public $IncentiveDetails = null;

    /**
     * @var string $GiftMessage
     * @access public
     */
    public $GiftMessage = null;

    /**
     * @var string $GiftReceiptEnable
     * @access public
     */
    public $GiftReceiptEnable = null;

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
     * @var string $BuyerMarketingEmail
     * @access public
     */
    public $BuyerMarketingEmail = null;

    /**
     * @var string $SurveyQuestion
     * @access public
     */
    public $SurveyQuestion = null;

    /**
     * @var string[] $SurveyChoiceSelected
     * @access public
     */
    public $SurveyChoiceSelected = null;

    /**
     * @var PaymentRequestInfoType $PaymentRequestInfo
     * @access public
     */
    public $PaymentRequestInfo = null;

    /**
     * @var ExternalRememberMeStatusDetailsType $ExternalRememberMeStatusDetails
     * @access public
     */
    public $ExternalRememberMeStatusDetails = null;

    /**
     * @var RefreshTokenStatusDetailsType $RefreshTokenStatusDetails
     * @access public
     */
    public $RefreshTokenStatusDetails = null;

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

    /**
     * @var string $CartChangeTolerance
     * @access public
     */
    public $CartChangeTolerance = null;

    /**
     * @var InstrumentDetailsType $InstrumentDetails
     * @access public
     */
    public $InstrumentDetails = null;

    /**
     * @param ExpressCheckoutTokenType $Token
     * @param PayerInfoType $PayerInfo
     * @param string $Custom
     * @param string $InvoiceID
     * @param string $ContactPhone
     * @param boolean $BillingAgreementAcceptedStatus
     * @param string $RedirectRequired
     * @param AddressType $BillingAddress
     * @param string $Note
     * @param string $CheckoutStatus
     * @param BasicAmountType $PayPalAdjustment
     * @param PaymentDetailsType $PaymentDetails
     * @param UserSelectedOptionType $UserSelectedOptions
     * @param IncentiveDetailsType[] $IncentiveDetails
     * @param string $GiftMessage
     * @param string $GiftReceiptEnable
     * @param string $GiftWrapName
     * @param BasicAmountType $GiftWrapAmount
     * @param string $BuyerMarketingEmail
     * @param string $SurveyQuestion
     * @param string[] $SurveyChoiceSelected
     * @param PaymentRequestInfoType $PaymentRequestInfo
     * @param ExternalRememberMeStatusDetailsType $ExternalRememberMeStatusDetails
     * @param RefreshTokenStatusDetailsType $RefreshTokenStatusDetails
     * @param PaymentInfoType $PaymentInfo
     * @param string $CartChangeTolerance
     * @param InstrumentDetailsType $InstrumentDetails
     * @access public
     */
    public function __construct($Token, $PayerInfo, $Custom, $InvoiceID, $ContactPhone, $BillingAgreementAcceptedStatus, $RedirectRequired, $BillingAddress, $Note, $CheckoutStatus, $PayPalAdjustment, $PaymentDetails, $UserSelectedOptions, $IncentiveDetails, $GiftMessage, $GiftReceiptEnable, $GiftWrapName, $GiftWrapAmount, $BuyerMarketingEmail, $SurveyQuestion, $SurveyChoiceSelected, $PaymentRequestInfo, $ExternalRememberMeStatusDetails, $RefreshTokenStatusDetails, $PaymentInfo, $CartChangeTolerance, $InstrumentDetails)
    {
      $this->Token = $Token;
      $this->PayerInfo = $PayerInfo;
      $this->Custom = $Custom;
      $this->InvoiceID = $InvoiceID;
      $this->ContactPhone = $ContactPhone;
      $this->BillingAgreementAcceptedStatus = $BillingAgreementAcceptedStatus;
      $this->RedirectRequired = $RedirectRequired;
      $this->BillingAddress = $BillingAddress;
      $this->Note = $Note;
      $this->CheckoutStatus = $CheckoutStatus;
      $this->PayPalAdjustment = $PayPalAdjustment;
      $this->PaymentDetails = $PaymentDetails;
      $this->UserSelectedOptions = $UserSelectedOptions;
      $this->IncentiveDetails = $IncentiveDetails;
      $this->GiftMessage = $GiftMessage;
      $this->GiftReceiptEnable = $GiftReceiptEnable;
      $this->GiftWrapName = $GiftWrapName;
      $this->GiftWrapAmount = $GiftWrapAmount;
      $this->BuyerMarketingEmail = $BuyerMarketingEmail;
      $this->SurveyQuestion = $SurveyQuestion;
      $this->SurveyChoiceSelected = $SurveyChoiceSelected;
      $this->PaymentRequestInfo = $PaymentRequestInfo;
      $this->ExternalRememberMeStatusDetails = $ExternalRememberMeStatusDetails;
      $this->RefreshTokenStatusDetails = $RefreshTokenStatusDetails;
      $this->PaymentInfo = $PaymentInfo;
      $this->CartChangeTolerance = $CartChangeTolerance;
      $this->InstrumentDetails = $InstrumentDetails;
    }

}
