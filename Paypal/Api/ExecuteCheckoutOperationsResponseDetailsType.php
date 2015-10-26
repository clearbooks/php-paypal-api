<?php

namespace Paypal\Api;

class ExecuteCheckoutOperationsResponseDetailsType
{

    /**
     * @var SetDataResponseType $SetDataResponse
     * @access public
     */
    public $SetDataResponse = null;

    /**
     * @var AuthorizationResponseType $AuthorizationResponse
     * @access public
     */
    public $AuthorizationResponse = null;

    /**
     * @param SetDataResponseType $SetDataResponse
     * @param AuthorizationResponseType $AuthorizationResponse
     * @access public
     */
    public function __construct($SetDataResponse, $AuthorizationResponse)
    {
      $this->SetDataResponse = $SetDataResponse;
      $this->AuthorizationResponse = $AuthorizationResponse;
    }

}
