<?php

namespace Paypal\Api;

class ExternalRememberMeOptOutReq
{

    /**
     * @var ExternalRememberMeOptOutRequestType $ExternalRememberMeOptOutRequest
     * @access public
     */
    public $ExternalRememberMeOptOutRequest = null;

    /**
     * @param ExternalRememberMeOptOutRequestType $ExternalRememberMeOptOutRequest
     * @access public
     */
    public function __construct($ExternalRememberMeOptOutRequest)
    {
      $this->ExternalRememberMeOptOutRequest = $ExternalRememberMeOptOutRequest;
    }

}
