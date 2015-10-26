<?php

namespace Paypal\Api;

class GetTransactionDetailsReq
{

    /**
     * @var GetTransactionDetailsRequestType $GetTransactionDetailsRequest
     * @access public
     */
    public $GetTransactionDetailsRequest = null;

    /**
     * @param GetTransactionDetailsRequestType $GetTransactionDetailsRequest
     * @access public
     */
    public function __construct($GetTransactionDetailsRequest)
    {
      $this->GetTransactionDetailsRequest = $GetTransactionDetailsRequest;
    }

}
