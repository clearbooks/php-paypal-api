<?php

namespace Paypal\Api;

class GetBalanceReq
{

    /**
     * @var GetBalanceRequestType $GetBalanceRequest
     * @access public
     */
    public $GetBalanceRequest = null;

    /**
     * @param GetBalanceRequestType $GetBalanceRequest
     * @access public
     */
    public function __construct($GetBalanceRequest)
    {
      $this->GetBalanceRequest = $GetBalanceRequest;
    }

}
