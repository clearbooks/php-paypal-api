<?php

namespace Paypal\Api;

class GetIncentiveEvaluationReq
{

    /**
     * @var GetIncentiveEvaluationRequestType $GetIncentiveEvaluationRequest
     * @access public
     */
    public $GetIncentiveEvaluationRequest = null;

    /**
     * @param GetIncentiveEvaluationRequestType $GetIncentiveEvaluationRequest
     * @access public
     */
    public function __construct($GetIncentiveEvaluationRequest)
    {
      $this->GetIncentiveEvaluationRequest = $GetIncentiveEvaluationRequest;
    }

}
