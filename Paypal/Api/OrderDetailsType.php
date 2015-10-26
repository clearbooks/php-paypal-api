<?php

namespace Paypal\Api;

class OrderDetailsType
{

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var BasicAmountType $MaxAmount
     * @access public
     */
    public $MaxAmount = null;

    /**
     * @param string $Description
     * @param BasicAmountType $MaxAmount
     * @access public
     */
    public function __construct($Description, $MaxAmount)
    {
      $this->Description = $Description;
      $this->MaxAmount = $MaxAmount;
    }

}
