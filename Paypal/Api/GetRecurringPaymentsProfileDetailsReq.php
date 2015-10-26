<?php

namespace Paypal\Api;

class GetRecurringPaymentsProfileDetailsReq
{

    /**
     * @var GetRecurringPaymentsProfileDetailsRequestType $GetRecurringPaymentsProfileDetailsRequest
     * @access public
     */
    public $GetRecurringPaymentsProfileDetailsRequest = null;

    /**
     * @param GetRecurringPaymentsProfileDetailsRequestType $GetRecurringPaymentsProfileDetailsRequest
     * @access public
     */
    public function __construct($GetRecurringPaymentsProfileDetailsRequest)
    {
      $this->GetRecurringPaymentsProfileDetailsRequest = $GetRecurringPaymentsProfileDetailsRequest;
    }

}
