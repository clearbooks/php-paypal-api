<?php

namespace Paypal\Api;

class SubscriptionTermsType
{

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $period
     * @access public
     */
    public $period = null;

    /**
     * @param BasicAmountType $Amount
     * @param string $period
     * @access public
     */
    public function __construct($Amount, $period)
    {
      $this->Amount = $Amount;
      $this->period = $period;
    }

}
