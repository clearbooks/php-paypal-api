<?php

namespace Paypal\Api;

class IncentiveDetailsType
{

    /**
     * @var string $UniqueIdentifier
     * @access public
     */
    public $UniqueIdentifier = null;

    /**
     * @var IncentiveSiteAppliedOnType $SiteAppliedOn
     * @access public
     */
    public $SiteAppliedOn = null;

    /**
     * @var BasicAmountType $TotalDiscountAmount
     * @access public
     */
    public $TotalDiscountAmount = null;

    /**
     * @var IncentiveAppliedStatusType $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var int $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @var IncentiveAppliedDetailsType[] $IncentiveAppliedDetails
     * @access public
     */
    public $IncentiveAppliedDetails = null;

    /**
     * @param string $UniqueIdentifier
     * @param IncentiveSiteAppliedOnType $SiteAppliedOn
     * @param BasicAmountType $TotalDiscountAmount
     * @param IncentiveAppliedStatusType $Status
     * @param int $ErrorCode
     * @param IncentiveAppliedDetailsType[] $IncentiveAppliedDetails
     * @access public
     */
    public function __construct($UniqueIdentifier, $SiteAppliedOn, $TotalDiscountAmount, $Status, $ErrorCode, $IncentiveAppliedDetails)
    {
      $this->UniqueIdentifier = $UniqueIdentifier;
      $this->SiteAppliedOn = $SiteAppliedOn;
      $this->TotalDiscountAmount = $TotalDiscountAmount;
      $this->Status = $Status;
      $this->ErrorCode = $ErrorCode;
      $this->IncentiveAppliedDetails = $IncentiveAppliedDetails;
    }

}
