<?php

namespace Paypal\Api;

class DoExpressCheckoutPaymentRequestDetailsType
{

    /**
     * @var PaymentActionCodeType $PaymentAction
     * @access public
     */
    public $PaymentAction = null;

    /**
     * @var ExpressCheckoutTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var UserIDType $PayerID
     * @access public
     */
    public $PayerID = null;

    /**
     * @var string $OrderURL
     * @access public
     */
    public $OrderURL = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     * @access public
     */
    public $PaymentDetails = null;

    /**
     * @var string $PromoOverrideFlag
     * @access public
     */
    public $PromoOverrideFlag = null;

    /**
     * @var string $PromoCode
     * @access public
     */
    public $PromoCode = null;

    /**
     * @var EnhancedDataType $EnhancedData
     * @access public
     */
    public $EnhancedData = null;

    /**
     * @var string $SoftDescriptor
     * @access public
     */
    public $SoftDescriptor = null;

    /**
     * @var UserSelectedOptionType $UserSelectedOptions
     * @access public
     */
    public $UserSelectedOptions = null;

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
     * @var string $ButtonSource
     * @access public
     */
    public $ButtonSource = null;

    /**
     * @var boolean $SkipBACreation
     * @access public
     */
    public $SkipBACreation = null;

    /**
     * @var string $UseSessionPaymentDetails
     * @access public
     */
    public $UseSessionPaymentDetails = null;

    /**
     * @var CoupledBucketsType $CoupledBuckets
     * @access public
     */
    public $CoupledBuckets = null;

    /**
     * @var string $ClientID
     * @access public
     */
    public $ClientID = null;

    /**
     * @var string $ProductLine
     * @access public
     */
    public $ProductLine = null;

    /**
     * @param PaymentActionCodeType $PaymentAction
     * @param ExpressCheckoutTokenType $Token
     * @param UserIDType $PayerID
     * @param string $OrderURL
     * @param string $MsgSubID
     * @param PaymentDetailsType $PaymentDetails
     * @param string $PromoOverrideFlag
     * @param string $PromoCode
     * @param EnhancedDataType $EnhancedData
     * @param string $SoftDescriptor
     * @param UserSelectedOptionType $UserSelectedOptions
     * @param string $GiftMessage
     * @param string $GiftReceiptEnable
     * @param string $GiftWrapName
     * @param BasicAmountType $GiftWrapAmount
     * @param string $BuyerMarketingEmail
     * @param string $SurveyQuestion
     * @param string[] $SurveyChoiceSelected
     * @param string $ButtonSource
     * @param boolean $SkipBACreation
     * @param string $UseSessionPaymentDetails
     * @param CoupledBucketsType $CoupledBuckets
     * @param string $ClientID
     * @param string $ProductLine
     * @access public
     */
    public function __construct($PaymentAction, $Token, $PayerID, $OrderURL, $MsgSubID, $PaymentDetails, $PromoOverrideFlag, $PromoCode, $EnhancedData, $SoftDescriptor, $UserSelectedOptions, $GiftMessage, $GiftReceiptEnable, $GiftWrapName, $GiftWrapAmount, $BuyerMarketingEmail, $SurveyQuestion, $SurveyChoiceSelected, $ButtonSource, $SkipBACreation, $UseSessionPaymentDetails, $CoupledBuckets, $ClientID, $ProductLine)
    {
      $this->PaymentAction = $PaymentAction;
      $this->Token = $Token;
      $this->PayerID = $PayerID;
      $this->OrderURL = $OrderURL;
      $this->MsgSubID = $MsgSubID;
      $this->PaymentDetails = $PaymentDetails;
      $this->PromoOverrideFlag = $PromoOverrideFlag;
      $this->PromoCode = $PromoCode;
      $this->EnhancedData = $EnhancedData;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->UserSelectedOptions = $UserSelectedOptions;
      $this->GiftMessage = $GiftMessage;
      $this->GiftReceiptEnable = $GiftReceiptEnable;
      $this->GiftWrapName = $GiftWrapName;
      $this->GiftWrapAmount = $GiftWrapAmount;
      $this->BuyerMarketingEmail = $BuyerMarketingEmail;
      $this->SurveyQuestion = $SurveyQuestion;
      $this->SurveyChoiceSelected = $SurveyChoiceSelected;
      $this->ButtonSource = $ButtonSource;
      $this->SkipBACreation = $SkipBACreation;
      $this->UseSessionPaymentDetails = $UseSessionPaymentDetails;
      $this->CoupledBuckets = $CoupledBuckets;
      $this->ClientID = $ClientID;
      $this->ProductLine = $ProductLine;
    }

}
