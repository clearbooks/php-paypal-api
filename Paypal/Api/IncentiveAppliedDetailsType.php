<?php

namespace Paypal\Api;

class IncentiveAppliedDetailsType
{

    /**
     * @var string $PaymentRequestID
     * @access public
     */
    public $PaymentRequestID = null;

    /**
     * @var string $ItemId
     * @access public
     */
    public $ItemId = null;

    /**
     * @var string $ExternalTxnId
     * @access public
     */
    public $ExternalTxnId = null;

    /**
     * @var BasicAmountType $DiscountAmount
     * @access public
     */
    public $DiscountAmount = null;

    /**
     * @var string $SubType
     * @access public
     */
    public $SubType = null;

    /**
     * @param string $PaymentRequestID
     * @param string $ItemId
     * @param string $ExternalTxnId
     * @param BasicAmountType $DiscountAmount
     * @param string $SubType
     * @access public
     */
    public function __construct($PaymentRequestID, $ItemId, $ExternalTxnId, $DiscountAmount, $SubType)
    {
      $this->PaymentRequestID = $PaymentRequestID;
      $this->ItemId = $ItemId;
      $this->ExternalTxnId = $ExternalTxnId;
      $this->DiscountAmount = $DiscountAmount;
      $this->SubType = $SubType;
    }

}
