<?php

namespace Paypal\Api;

class UpdateRecurringPaymentsProfileRequestDetailsType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $SubscriberName
     * @access public
     */
    public $SubscriberName = null;

    /**
     * @var AddressType $SubscriberShippingAddress
     * @access public
     */
    public $SubscriberShippingAddress = null;

    /**
     * @var string $ProfileReference
     * @access public
     */
    public $ProfileReference = null;

    /**
     * @var int $AdditionalBillingCycles
     * @access public
     */
    public $AdditionalBillingCycles = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var BasicAmountType $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var BasicAmountType $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @var BasicAmountType $OutstandingBalance
     * @access public
     */
    public $OutstandingBalance = null;

    /**
     * @var AutoBillType $AutoBillOutstandingAmount
     * @access public
     */
    public $AutoBillOutstandingAmount = null;

    /**
     * @var int $MaxFailedPayments
     * @access public
     */
    public $MaxFailedPayments = null;

    /**
     * @var CreditCardDetailsType $CreditCard
     * @access public
     */
    public $CreditCard = null;

    /**
     * @var dateTime $BillingStartDate
     * @access public
     */
    public $BillingStartDate = null;

    /**
     * @var BillingPeriodDetailsType_Update $TrialPeriod
     * @access public
     */
    public $TrialPeriod = null;

    /**
     * @var BillingPeriodDetailsType_Update $PaymentPeriod
     * @access public
     */
    public $PaymentPeriod = null;

    /**
     * @param string $ProfileID
     * @param string $Note
     * @param string $Description
     * @param string $SubscriberName
     * @param AddressType $SubscriberShippingAddress
     * @param string $ProfileReference
     * @param int $AdditionalBillingCycles
     * @param BasicAmountType $Amount
     * @param BasicAmountType $ShippingAmount
     * @param BasicAmountType $TaxAmount
     * @param BasicAmountType $OutstandingBalance
     * @param AutoBillType $AutoBillOutstandingAmount
     * @param int $MaxFailedPayments
     * @param CreditCardDetailsType $CreditCard
     * @param dateTime $BillingStartDate
     * @param BillingPeriodDetailsType_Update $TrialPeriod
     * @param BillingPeriodDetailsType_Update $PaymentPeriod
     * @access public
     */
    public function __construct($ProfileID, $Note, $Description, $SubscriberName, $SubscriberShippingAddress, $ProfileReference, $AdditionalBillingCycles, $Amount, $ShippingAmount, $TaxAmount, $OutstandingBalance, $AutoBillOutstandingAmount, $MaxFailedPayments, $CreditCard, $BillingStartDate, $TrialPeriod, $PaymentPeriod)
    {
      $this->ProfileID = $ProfileID;
      $this->Note = $Note;
      $this->Description = $Description;
      $this->SubscriberName = $SubscriberName;
      $this->SubscriberShippingAddress = $SubscriberShippingAddress;
      $this->ProfileReference = $ProfileReference;
      $this->AdditionalBillingCycles = $AdditionalBillingCycles;
      $this->Amount = $Amount;
      $this->ShippingAmount = $ShippingAmount;
      $this->TaxAmount = $TaxAmount;
      $this->OutstandingBalance = $OutstandingBalance;
      $this->AutoBillOutstandingAmount = $AutoBillOutstandingAmount;
      $this->MaxFailedPayments = $MaxFailedPayments;
      $this->CreditCard = $CreditCard;
      $this->BillingStartDate = $BillingStartDate;
      $this->TrialPeriod = $TrialPeriod;
      $this->PaymentPeriod = $PaymentPeriod;
    }

}
