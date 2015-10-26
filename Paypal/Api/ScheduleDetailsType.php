<?php

namespace Paypal\Api;

class ScheduleDetailsType
{

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var BillingPeriodDetailsType $TrialPeriod
     * @access public
     */
    public $TrialPeriod = null;

    /**
     * @var BillingPeriodDetailsType $PaymentPeriod
     * @access public
     */
    public $PaymentPeriod = null;

    /**
     * @var int $MaxFailedPayments
     * @access public
     */
    public $MaxFailedPayments = null;

    /**
     * @var ActivationDetailsType $ActivationDetails
     * @access public
     */
    public $ActivationDetails = null;

    /**
     * @var AutoBillType $AutoBillOutstandingAmount
     * @access public
     */
    public $AutoBillOutstandingAmount = null;

    /**
     * @param string $Description
     * @param BillingPeriodDetailsType $TrialPeriod
     * @param BillingPeriodDetailsType $PaymentPeriod
     * @param int $MaxFailedPayments
     * @param ActivationDetailsType $ActivationDetails
     * @param AutoBillType $AutoBillOutstandingAmount
     * @access public
     */
    public function __construct($Description, $TrialPeriod, $PaymentPeriod, $MaxFailedPayments, $ActivationDetails, $AutoBillOutstandingAmount)
    {
      $this->Description = $Description;
      $this->TrialPeriod = $TrialPeriod;
      $this->PaymentPeriod = $PaymentPeriod;
      $this->MaxFailedPayments = $MaxFailedPayments;
      $this->ActivationDetails = $ActivationDetails;
      $this->AutoBillOutstandingAmount = $AutoBillOutstandingAmount;
    }

}
