<?php

namespace Paypal\Api;

class GetBoardingDetailsReq
{

    /**
     * @var GetBoardingDetailsRequestType $GetBoardingDetailsRequest
     * @access public
     */
    public $GetBoardingDetailsRequest = null;

    /**
     * @param GetBoardingDetailsRequestType $GetBoardingDetailsRequest
     * @access public
     */
    public function __construct($GetBoardingDetailsRequest)
    {
      $this->GetBoardingDetailsRequest = $GetBoardingDetailsRequest;
    }

}
