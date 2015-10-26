<?php

namespace Paypal\Api;

class OfferCouponInfoType
{

    /**
     * @var string $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $AmountCurrency
     * @access public
     */
    public $AmountCurrency = null;

    /**
     * @param string $Type
     * @param string $ID
     * @param string $Amount
     * @param string $AmountCurrency
     * @access public
     */
    public function __construct($Type, $ID, $Amount, $AmountCurrency)
    {
      $this->Type = $Type;
      $this->ID = $ID;
      $this->Amount = $Amount;
      $this->AmountCurrency = $AmountCurrency;
    }

}
