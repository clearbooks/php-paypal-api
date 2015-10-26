<?php

namespace Paypal\Api;

class ExecuteCheckoutOperationsReq
{

    /**
     * @var ExecuteCheckoutOperationsRequestType $ExecuteCheckoutOperationsRequest
     * @access public
     */
    public $ExecuteCheckoutOperationsRequest = null;

    /**
     * @param ExecuteCheckoutOperationsRequestType $ExecuteCheckoutOperationsRequest
     * @access public
     */
    public function __construct($ExecuteCheckoutOperationsRequest)
    {
      $this->ExecuteCheckoutOperationsRequest = $ExecuteCheckoutOperationsRequest;
    }

}
