<?php

namespace Paypal\Api;

class UpdateRecurringPaymentsProfileReq
{

    /**
     * @var UpdateRecurringPaymentsProfileRequestType $UpdateRecurringPaymentsProfileRequest
     * @access public
     */
    public $UpdateRecurringPaymentsProfileRequest = null;

    /**
     * @param UpdateRecurringPaymentsProfileRequestType $UpdateRecurringPaymentsProfileRequest
     * @access public
     */
    public function __construct($UpdateRecurringPaymentsProfileRequest)
    {
      $this->UpdateRecurringPaymentsProfileRequest = $UpdateRecurringPaymentsProfileRequest;
    }

}
