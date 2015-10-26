<?php

namespace Paypal\Api;

class FeesType
{

    /**
     * @var FeeType[] $Fee
     * @access public
     */
    public $Fee = null;

    /**
     * @param FeeType[] $Fee
     * @access public
     */
    public function __construct($Fee)
    {
      $this->Fee = $Fee;
    }

}
