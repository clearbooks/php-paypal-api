<?php

namespace Paypal\Api;

class BillAgreementUpdateReq
{

    /**
     * @var BAUpdateRequestType $BAUpdateRequest
     * @access public
     */
    public $BAUpdateRequest = null;

    /**
     * @param BAUpdateRequestType $BAUpdateRequest
     * @access public
     */
    public function __construct($BAUpdateRequest)
    {
      $this->BAUpdateRequest = $BAUpdateRequest;
    }

}
