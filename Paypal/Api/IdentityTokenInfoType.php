<?php

namespace Paypal\Api;

class IdentityTokenInfoType
{

    /**
     * @var string $AccessToken
     * @access public
     */
    public $AccessToken = null;

    /**
     * @param string $AccessToken
     * @access public
     */
    public function __construct($AccessToken)
    {
      $this->AccessToken = $AccessToken;
    }

}
