<?php

namespace Paypal\Api;

class AuthorizationRequestType
{

    /**
     * @var boolean $IsRequested
     * @access public
     */
    public $IsRequested = null;

    /**
     * @param boolean $IsRequested
     * @access public
     */
    public function __construct($IsRequested)
    {
      $this->IsRequested = $IsRequested;
    }

}
