<?php

namespace Paypal\Api;

class RecurringPaymentsSummaryType
{

    /**
     * @var dateTime $NextBillingDate
     * @access public
     */
    public $NextBillingDate = null;

    /**
     * @var int $NumberCyclesCompleted
     * @access public
     */
    public $NumberCyclesCompleted = null;

    /**
     * @var int $NumberCyclesRemaining
     * @access public
     */
    public $NumberCyclesRemaining = null;

    /**
     * @var BasicAmountType $OutstandingBalance
     * @access public
     */
    public $OutstandingBalance = null;

    /**
     * @var int $FailedPaymentCount
     * @access public
     */
    public $FailedPaymentCount = null;

    /**
     * @var dateTime $LastPaymentDate
     * @access public
     */
    public $LastPaymentDate = null;

    /**
     * @var BasicAmountType $LastPaymentAmount
     * @access public
     */
    public $LastPaymentAmount = null;

    /**
     * @param dateTime $NextBillingDate
     * @param int $NumberCyclesCompleted
     * @param int $NumberCyclesRemaining
     * @param BasicAmountType $OutstandingBalance
     * @param int $FailedPaymentCount
     * @param dateTime $LastPaymentDate
     * @param BasicAmountType $LastPaymentAmount
     * @access public
     */
    public function __construct($NextBillingDate, $NumberCyclesCompleted, $NumberCyclesRemaining, $OutstandingBalance, $FailedPaymentCount, $LastPaymentDate, $LastPaymentAmount)
    {
      $this->NextBillingDate = $NextBillingDate;
      $this->NumberCyclesCompleted = $NumberCyclesCompleted;
      $this->NumberCyclesRemaining = $NumberCyclesRemaining;
      $this->OutstandingBalance = $OutstandingBalance;
      $this->FailedPaymentCount = $FailedPaymentCount;
      $this->LastPaymentDate = $LastPaymentDate;
      $this->LastPaymentAmount = $LastPaymentAmount;
    }

}
