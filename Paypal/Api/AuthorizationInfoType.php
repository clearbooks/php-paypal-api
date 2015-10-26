<?php

namespace Paypal\Api;

class AuthorizationInfoType
{

    /**
     * @var PaymentStatusCodeType $PaymentStatus
     * @access public
     */
    public $PaymentStatus = null;

    /**
     * @var PendingStatusCodeType $PendingReason
     * @access public
     */
    public $PendingReason = null;

    /**
     * @var string $ProtectionEligibility
     * @access public
     */
    public $ProtectionEligibility = null;

    /**
     * @var string $ProtectionEligibilityType
     * @access public
     */
    public $ProtectionEligibilityType = null;

    /**
     * @param PaymentStatusCodeType $PaymentStatus
     * @param PendingStatusCodeType $PendingReason
     * @param string $ProtectionEligibility
     * @param string $ProtectionEligibilityType
     * @access public
     */
    public function __construct($PaymentStatus, $PendingReason, $ProtectionEligibility, $ProtectionEligibilityType)
    {
      $this->PaymentStatus = $PaymentStatus;
      $this->PendingReason = $PendingReason;
      $this->ProtectionEligibility = $ProtectionEligibility;
      $this->ProtectionEligibilityType = $ProtectionEligibilityType;
    }

}
