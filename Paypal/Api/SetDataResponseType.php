<?php

namespace Paypal\Api;

class SetDataResponseType
{

    /**
     * @var ExpressCheckoutTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var AddressType[] $ShippingAddresses
     * @access public
     */
    public $ShippingAddresses = null;

    /**
     * @var ErrorType[] $SetDataError
     * @access public
     */
    public $SetDataError = null;

    /**
     * @param ExpressCheckoutTokenType $Token
     * @param AddressType[] $ShippingAddresses
     * @param ErrorType[] $SetDataError
     * @access public
     */
    public function __construct($Token, $ShippingAddresses, $SetDataError)
    {
      $this->Token = $Token;
      $this->ShippingAddresses = $ShippingAddresses;
      $this->SetDataError = $SetDataError;
    }

}
