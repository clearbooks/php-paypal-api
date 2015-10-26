<?php

namespace Paypal\Api;

class TransactionStatusType
{

    /**
     * @var int $eBayPaymentStatus
     * @access public
     */
    public $eBayPaymentStatus = null;

    /**
     * @var int $IncompleteState
     * @access public
     */
    public $IncompleteState = null;

    /**
     * @var dateTime $LastTimeModified
     * @access public
     */
    public $LastTimeModified = null;

    /**
     * @var BuyerPaymentMethodCodeType $PaymentMethodUsed
     * @access public
     */
    public $PaymentMethodUsed = null;

    /**
     * @var int $StatusIs
     * @access public
     */
    public $StatusIs = null;

    /**
     * @param int $eBayPaymentStatus
     * @param int $IncompleteState
     * @param dateTime $LastTimeModified
     * @param BuyerPaymentMethodCodeType $PaymentMethodUsed
     * @param int $StatusIs
     * @access public
     */
    public function __construct($eBayPaymentStatus, $IncompleteState, $LastTimeModified, $PaymentMethodUsed, $StatusIs)
    {
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      $this->IncompleteState = $IncompleteState;
      $this->LastTimeModified = $LastTimeModified;
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      $this->StatusIs = $StatusIs;
    }

}
