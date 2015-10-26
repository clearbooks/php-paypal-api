<?php

namespace Paypal\Api;

class CreateRecurringPaymentsProfileReq
{

    /**
     * @var CreateRecurringPaymentsProfileRequestType $CreateRecurringPaymentsProfileRequest
     * @access public
     */
    public $CreateRecurringPaymentsProfileRequest = null;

    /**
     * @param CreateRecurringPaymentsProfileRequestType $CreateRecurringPaymentsProfileRequest
     * @access public
     */
    public function __construct($CreateRecurringPaymentsProfileRequest)
    {
      $this->CreateRecurringPaymentsProfileRequest = $CreateRecurringPaymentsProfileRequest;
    }

}
