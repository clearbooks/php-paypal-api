<?php

namespace Paypal\Api;

class MobileIDInfoType
{

    /**
     * @var string $SessionToken
     * @access public
     */
    public $SessionToken = null;

    /**
     * @param string $SessionToken
     * @access public
     */
    public function __construct($SessionToken)
    {
      $this->SessionToken = $SessionToken;
    }

}
