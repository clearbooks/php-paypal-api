<?php

namespace Paypal\Api;

class BMUpdateButtonReq
{

    /**
     * @var BMUpdateButtonRequestType $BMUpdateButtonRequest
     * @access public
     */
    public $BMUpdateButtonRequest = null;

    /**
     * @param BMUpdateButtonRequestType $BMUpdateButtonRequest
     * @access public
     */
    public function __construct($BMUpdateButtonRequest)
    {
      $this->BMUpdateButtonRequest = $BMUpdateButtonRequest;
    }

}
