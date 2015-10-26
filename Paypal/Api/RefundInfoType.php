<?php

namespace Paypal\Api;

class RefundInfoType
{

    /**
     * @var PaymentStatusCodeType $RefundStatus
     * @access public
     */
    public $RefundStatus = null;

    /**
     * @var PendingStatusCodeType $PendingReason
     * @access public
     */
    public $PendingReason = null;

    /**
     * @param PaymentStatusCodeType $RefundStatus
     * @param PendingStatusCodeType $PendingReason
     * @access public
     */
    public function __construct($RefundStatus, $PendingReason)
    {
      $this->RefundStatus = $RefundStatus;
      $this->PendingReason = $PendingReason;
    }

}
