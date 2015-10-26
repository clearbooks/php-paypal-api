<?php

namespace Paypal\Api;

class AdditionalFeeType
{

    /**
     * @var string $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @param string $Type
     * @param BasicAmountType $Amount
     * @access public
     */
    public function __construct($Type, $Amount)
    {
      $this->Type = $Type;
      $this->Amount = $Amount;
    }

}
