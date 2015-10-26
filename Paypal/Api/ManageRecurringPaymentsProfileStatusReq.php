<?php

namespace Paypal\Api;

class ManageRecurringPaymentsProfileStatusReq
{

    /**
     * @var ManageRecurringPaymentsProfileStatusRequestType $ManageRecurringPaymentsProfileStatusRequest
     * @access public
     */
    public $ManageRecurringPaymentsProfileStatusRequest = null;

    /**
     * @param ManageRecurringPaymentsProfileStatusRequestType $ManageRecurringPaymentsProfileStatusRequest
     * @access public
     */
    public function __construct($ManageRecurringPaymentsProfileStatusRequest)
    {
      $this->ManageRecurringPaymentsProfileStatusRequest = $ManageRecurringPaymentsProfileStatusRequest;
    }

}
