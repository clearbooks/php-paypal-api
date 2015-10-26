<?php

namespace Paypal\Api;

class BMCreateButtonReq
{

    /**
     * @var BMCreateButtonRequestType $BMCreateButtonRequest
     * @access public
     */
    public $BMCreateButtonRequest = null;

    /**
     * @param BMCreateButtonRequestType $BMCreateButtonRequest
     * @access public
     */
    public function __construct($BMCreateButtonRequest)
    {
      $this->BMCreateButtonRequest = $BMCreateButtonRequest;
    }

}
