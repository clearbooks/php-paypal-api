<?php

namespace Paypal\Api;

class GetIncentiveEvaluationRequestDetailsType
{

    /**
     * @var string $ExternalBuyerId
     * @access public
     */
    public $ExternalBuyerId = null;

    /**
     * @var string $IncentiveCodes
     * @access public
     */
    public $IncentiveCodes = null;

    /**
     * @var IncentiveApplyIndicationType $ApplyIndication
     * @access public
     */
    public $ApplyIndication = null;

    /**
     * @var IncentiveBucketType $Buckets
     * @access public
     */
    public $Buckets = null;

    /**
     * @var BasicAmountType $CartTotalAmt
     * @access public
     */
    public $CartTotalAmt = null;

    /**
     * @var IncentiveRequestDetailsType $RequestDetails
     * @access public
     */
    public $RequestDetails = null;

    /**
     * @param string $ExternalBuyerId
     * @param string $IncentiveCodes
     * @param IncentiveApplyIndicationType $ApplyIndication
     * @param IncentiveBucketType $Buckets
     * @param BasicAmountType $CartTotalAmt
     * @param IncentiveRequestDetailsType $RequestDetails
     * @access public
     */
    public function __construct($ExternalBuyerId, $IncentiveCodes, $ApplyIndication, $Buckets, $CartTotalAmt, $RequestDetails)
    {
      $this->ExternalBuyerId = $ExternalBuyerId;
      $this->IncentiveCodes = $IncentiveCodes;
      $this->ApplyIndication = $ApplyIndication;
      $this->Buckets = $Buckets;
      $this->CartTotalAmt = $CartTotalAmt;
      $this->RequestDetails = $RequestDetails;
    }

}
