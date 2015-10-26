<?php

namespace Paypal\Api;

class SetAuthFlowParamReq
{

    /**
     * @var SetAuthFlowParamRequestType $SetAuthFlowParamRequest
     * @access public
     */
    public $SetAuthFlowParamRequest = null;

    /**
     * @param SetAuthFlowParamRequestType $SetAuthFlowParamRequest
     * @access public
     */
    public function __construct($SetAuthFlowParamRequest)
    {
      $this->SetAuthFlowParamRequest = $SetAuthFlowParamRequest;
    }

}
