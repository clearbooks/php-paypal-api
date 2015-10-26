<?php

namespace Paypal\Api;

class FeeType
{

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var AmountType $Fee
     * @access public
     */
    public $Fee = null;

    /**
     * @param string $Name
     * @param AmountType $Fee
     * @access public
     */
    public function __construct($Name, $Fee)
    {
      $this->Name = $Name;
      $this->Fee = $Fee;
    }

}
