<?php

namespace Paypal\Api;

class PaymentTransactionType
{

    /**
     * @var ReceiverInfoType $ReceiverInfo
     * @access public
     */
    public $ReceiverInfo = null;

    /**
     * @var PayerInfoType $PayerInfo
     * @access public
     */
    public $PayerInfo = null;

    /**
     * @var string $TPLReferenceID
     * @access public
     */
    public $TPLReferenceID = null;

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

    /**
     * @var PaymentItemInfoType $PaymentItemInfo
     * @access public
     */
    public $PaymentItemInfo = null;

    /**
     * @var OfferCouponInfoType $OfferCouponInfo
     * @access public
     */
    public $OfferCouponInfo = null;

    /**
     * @var AddressType $SecondaryAddress
     * @access public
     */
    public $SecondaryAddress = null;

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
     * @var string $GiftReceipt
     * @access public
     */
    public $GiftReceipt = null;

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
     * @var string $BuyerEmailOptIn
     * @access public
     */
    public $BuyerEmailOptIn = null;

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
     * @param ReceiverInfoType $ReceiverInfo
     * @param PayerInfoType $PayerInfo
     * @param string $TPLReferenceID
     * @param PaymentInfoType $PaymentInfo
     * @param PaymentItemInfoType $PaymentItemInfo
     * @param OfferCouponInfoType $OfferCouponInfo
     * @param AddressType $SecondaryAddress
     * @param UserSelectedOptionType $UserSelectedOptions
     * @param string $GiftMessage
     * @param string $GiftReceipt
     * @param string $GiftWrapName
     * @param BasicAmountType $GiftWrapAmount
     * @param string $BuyerEmailOptIn
     * @param string $SurveyQuestion
     * @param string[] $SurveyChoiceSelected
     * @access public
     */
    public function __construct($ReceiverInfo, $PayerInfo, $TPLReferenceID, $PaymentInfo, $PaymentItemInfo, $OfferCouponInfo, $SecondaryAddress, $UserSelectedOptions, $GiftMessage, $GiftReceipt, $GiftWrapName, $GiftWrapAmount, $BuyerEmailOptIn, $SurveyQuestion, $SurveyChoiceSelected)
    {
      $this->ReceiverInfo = $ReceiverInfo;
      $this->PayerInfo = $PayerInfo;
      $this->TPLReferenceID = $TPLReferenceID;
      $this->PaymentInfo = $PaymentInfo;
      $this->PaymentItemInfo = $PaymentItemInfo;
      $this->OfferCouponInfo = $OfferCouponInfo;
      $this->SecondaryAddress = $SecondaryAddress;
      $this->UserSelectedOptions = $UserSelectedOptions;
      $this->GiftMessage = $GiftMessage;
      $this->GiftReceipt = $GiftReceipt;
      $this->GiftWrapName = $GiftWrapName;
      $this->GiftWrapAmount = $GiftWrapAmount;
      $this->BuyerEmailOptIn = $BuyerEmailOptIn;
      $this->SurveyQuestion = $SurveyQuestion;
      $this->SurveyChoiceSelected = $SurveyChoiceSelected;
    }

}
