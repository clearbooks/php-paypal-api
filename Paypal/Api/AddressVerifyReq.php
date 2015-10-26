<?php

namespace Paypal\Api;

class AddressVerifyReq
{

    /**
     * @var AddressVerifyRequestType $AddressVerifyRequest
     * @access public
     */
    public $AddressVerifyRequest = null;

    /**
     * @param AddressVerifyRequestType $AddressVerifyRequest
     * @access public
     */
    public function __construct($AddressVerifyRequest)
    {
      $this->AddressVerifyRequest = $AddressVerifyRequest;
    }

}
