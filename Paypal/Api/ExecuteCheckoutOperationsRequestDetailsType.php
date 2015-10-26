<?php

namespace Paypal\Api;

class ExecuteCheckoutOperationsRequestDetailsType
{

    /**
     * @var ExpressCheckoutTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var SetDataRequestType $SetDataRequest
     * @access public
     */
    public $SetDataRequest = null;

    /**
     * @var AuthorizationRequestType $AuthorizationRequest
     * @access public
     */
    public $AuthorizationRequest = null;

    /**
     * @param ExpressCheckoutTokenType $Token
     * @param SetDataRequestType $SetDataRequest
     * @param AuthorizationRequestType $AuthorizationRequest
     * @access public
     */
    public function __construct($Token, $SetDataRequest, $AuthorizationRequest)
    {
      $this->Token = $Token;
      $this->SetDataRequest = $SetDataRequest;
      $this->AuthorizationRequest = $AuthorizationRequest;
    }

}
