<?php

namespace Paypal\Api;

class GetRecurringPaymentsProfileDetailsResponseDetailsType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @var RecurringPaymentsProfileStatusType $ProfileStatus
     * @access public
     */
    public $ProfileStatus = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

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
     * @var RecurringPaymentsProfileDetailsType $RecurringPaymentsProfileDetails
     * @access public
     */
    public $RecurringPaymentsProfileDetails = null;

    /**
     * @var BillingPeriodDetailsType $CurrentRecurringPaymentsPeriod
     * @access public
     */
    public $CurrentRecurringPaymentsPeriod = null;

    /**
     * @var RecurringPaymentsSummaryType $RecurringPaymentsSummary
     * @access public
     */
    public $RecurringPaymentsSummary = null;

    /**
     * @var CreditCardDetailsType $CreditCard
     * @access public
     */
    public $CreditCard = null;

    /**
     * @var BillingPeriodDetailsType $TrialRecurringPaymentsPeriod
     * @access public
     */
    public $TrialRecurringPaymentsPeriod = null;

    /**
     * @var BillingPeriodDetailsType $RegularRecurringPaymentsPeriod
     * @access public
     */
    public $RegularRecurringPaymentsPeriod = null;

    /**
     * @var BasicAmountType $TrialAmountPaid
     * @access public
     */
    public $TrialAmountPaid = null;

    /**
     * @var BasicAmountType $RegularAmountPaid
     * @access public
     */
    public $RegularAmountPaid = null;

    /**
     * @var BasicAmountType $AggregateAmount
     * @access public
     */
    public $AggregateAmount = null;

    /**
     * @var BasicAmountType $AggregateOptionalAmount
     * @access public
     */
    public $AggregateOptionalAmount = null;

    /**
     * @var dateTime $FinalPaymentDueDate
     * @access public
     */
    public $FinalPaymentDueDate = null;

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
     * @param string $ProfileID
     * @param RecurringPaymentsProfileStatusType $ProfileStatus
     * @param string $Description
     * @param AutoBillType $AutoBillOutstandingAmount
     * @param int $MaxFailedPayments
     * @param RecurringPaymentsProfileDetailsType $RecurringPaymentsProfileDetails
     * @param BillingPeriodDetailsType $CurrentRecurringPaymentsPeriod
     * @param RecurringPaymentsSummaryType $RecurringPaymentsSummary
     * @param CreditCardDetailsType $CreditCard
     * @param BillingPeriodDetailsType $TrialRecurringPaymentsPeriod
     * @param BillingPeriodDetailsType $RegularRecurringPaymentsPeriod
     * @param BasicAmountType $TrialAmountPaid
     * @param BasicAmountType $RegularAmountPaid
     * @param BasicAmountType $AggregateAmount
     * @param BasicAmountType $AggregateOptionalAmount
     * @param dateTime $FinalPaymentDueDate
     * @param string $SoftDescriptor
     * @param string $SoftDescriptorCity
     * @access public
     */
    public function __construct($ProfileID, $ProfileStatus, $Description, $AutoBillOutstandingAmount, $MaxFailedPayments, $RecurringPaymentsProfileDetails, $CurrentRecurringPaymentsPeriod, $RecurringPaymentsSummary, $CreditCard, $TrialRecurringPaymentsPeriod, $RegularRecurringPaymentsPeriod, $TrialAmountPaid, $RegularAmountPaid, $AggregateAmount, $AggregateOptionalAmount, $FinalPaymentDueDate, $SoftDescriptor, $SoftDescriptorCity)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileStatus = $ProfileStatus;
      $this->Description = $Description;
      $this->AutoBillOutstandingAmount = $AutoBillOutstandingAmount;
      $this->MaxFailedPayments = $MaxFailedPayments;
      $this->RecurringPaymentsProfileDetails = $RecurringPaymentsProfileDetails;
      $this->CurrentRecurringPaymentsPeriod = $CurrentRecurringPaymentsPeriod;
      $this->RecurringPaymentsSummary = $RecurringPaymentsSummary;
      $this->CreditCard = $CreditCard;
      $this->TrialRecurringPaymentsPeriod = $TrialRecurringPaymentsPeriod;
      $this->RegularRecurringPaymentsPeriod = $RegularRecurringPaymentsPeriod;
      $this->TrialAmountPaid = $TrialAmountPaid;
      $this->RegularAmountPaid = $RegularAmountPaid;
      $this->AggregateAmount = $AggregateAmount;
      $this->AggregateOptionalAmount = $AggregateOptionalAmount;
      $this->FinalPaymentDueDate = $FinalPaymentDueDate;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->SoftDescriptorCity = $SoftDescriptorCity;
    }

}
