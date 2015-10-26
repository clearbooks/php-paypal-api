<?php

namespace Paypal\Api;

class GetIncentiveEvaluationResponseDetailsType
{

    /**
     * @var IncentiveDetailType $IncentiveDetails
     * @access public
     */
    public $IncentiveDetails = null;

    /**
     * @var string $RequestId
     * @access public
     */
    public $RequestId = null;

    /**
     * @param IncentiveDetailType $IncentiveDetails
     * @param string $RequestId
     * @access public
     */
    public function __construct($IncentiveDetails, $RequestId)
    {
      $this->IncentiveDetails = $IncentiveDetails;
      $this->RequestId = $RequestId;
    }

}
