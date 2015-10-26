<?php

namespace Paypal\Api;

class ShippingOptionType
{

    /**
     * @var string $ShippingOptionIsDefault
     * @access public
     */
    public $ShippingOptionIsDefault = null;

    /**
     * @var BasicAmountType $ShippingOptionAmount
     * @access public
     */
    public $ShippingOptionAmount = null;

    /**
     * @var string $ShippingOptionName
     * @access public
     */
    public $ShippingOptionName = null;

    /**
     * @param string $ShippingOptionIsDefault
     * @param BasicAmountType $ShippingOptionAmount
     * @param string $ShippingOptionName
     * @access public
     */
    public function __construct($ShippingOptionIsDefault, $ShippingOptionAmount, $ShippingOptionName)
    {
      $this->ShippingOptionIsDefault = $ShippingOptionIsDefault;
      $this->ShippingOptionAmount = $ShippingOptionAmount;
      $this->ShippingOptionName = $ShippingOptionName;
    }

}
