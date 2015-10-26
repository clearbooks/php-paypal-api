<?php

namespace Paypal\Api;

class EnterBoardingReq
{

    /**
     * @var EnterBoardingRequestType $EnterBoardingRequest
     * @access public
     */
    public $EnterBoardingRequest = null;

    /**
     * @param EnterBoardingRequestType $EnterBoardingRequest
     * @access public
     */
    public function __construct($EnterBoardingRequest)
    {
      $this->EnterBoardingRequest = $EnterBoardingRequest;
    }

}
