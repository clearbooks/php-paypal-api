<?php

namespace Paypal\Api;

class BuyerType
{

    /**
     * @var AddressType $ShippingAddress
     * @access public
     */
    public $ShippingAddress = null;

    /**
     * @param AddressType $ShippingAddress
     * @access public
     */
    public function __construct($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
    }

}
