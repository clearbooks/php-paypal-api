<?php

namespace Paypal\Api;

class InfoSharingDirectivesType
{

    /**
     * @var string $ReqBillingAddress
     * @access public
     */
    public $ReqBillingAddress = null;

    /**
     * @param string $ReqBillingAddress
     * @access public
     */
    public function __construct($ReqBillingAddress)
    {
      $this->ReqBillingAddress = $ReqBillingAddress;
    }

}
