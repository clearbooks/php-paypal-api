<?php

namespace Paypal\Api;

class ThreeDSecureInfoType
{

    /**
     * @var ThreeDSecureRequestType $ThreeDSecureRequest
     * @access public
     */
    public $ThreeDSecureRequest = null;

    /**
     * @var ThreeDSecureResponseType $ThreeDSecureResponse
     * @access public
     */
    public $ThreeDSecureResponse = null;

    /**
     * @param ThreeDSecureRequestType $ThreeDSecureRequest
     * @param ThreeDSecureResponseType $ThreeDSecureResponse
     * @access public
     */
    public function __construct($ThreeDSecureRequest, $ThreeDSecureResponse)
    {
      $this->ThreeDSecureRequest = $ThreeDSecureRequest;
      $this->ThreeDSecureResponse = $ThreeDSecureResponse;
    }

}
