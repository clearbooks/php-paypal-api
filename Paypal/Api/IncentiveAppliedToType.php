<?php

namespace Paypal\Api;

class IncentiveAppliedToType
{

    /**
     * @var string $BucketId
     * @access public
     */
    public $BucketId = null;

    /**
     * @var string $ItemId
     * @access public
     */
    public $ItemId = null;

    /**
     * @var BasicAmountType $IncentiveAmount
     * @access public
     */
    public $IncentiveAmount = null;

    /**
     * @var string $SubType
     * @access public
     */
    public $SubType = null;

    /**
     * @param string $BucketId
     * @param string $ItemId
     * @param BasicAmountType $IncentiveAmount
     * @param string $SubType
     * @access public
     */
    public function __construct($BucketId, $ItemId, $IncentiveAmount, $SubType)
    {
      $this->BucketId = $BucketId;
      $this->ItemId = $ItemId;
      $this->IncentiveAmount = $IncentiveAmount;
      $this->SubType = $SubType;
    }

}
