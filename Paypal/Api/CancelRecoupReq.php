<?php

namespace Paypal\Api;

class CancelRecoupReq
{

    /**
     * @var CancelRecoupRequestType $CancelRecoupRequest
     * @access public
     */
    public $CancelRecoupRequest = null;

    /**
     * @param CancelRecoupRequestType $CancelRecoupRequest
     * @access public
     */
    public function __construct($CancelRecoupRequest)
    {
      $this->CancelRecoupRequest = $CancelRecoupRequest;
    }

}
