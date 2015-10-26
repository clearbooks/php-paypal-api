<?php

namespace Paypal\Api;

class BMButtonSearchReq
{

    /**
     * @var BMButtonSearchRequestType $BMButtonSearchRequest
     * @access public
     */
    public $BMButtonSearchRequest = null;

    /**
     * @param BMButtonSearchRequestType $BMButtonSearchRequest
     * @access public
     */
    public function __construct($BMButtonSearchRequest)
    {
      $this->BMButtonSearchRequest = $BMButtonSearchRequest;
    }

}
