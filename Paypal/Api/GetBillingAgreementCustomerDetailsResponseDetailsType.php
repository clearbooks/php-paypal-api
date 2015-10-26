<?php

namespace Paypal\Api;

class GetBillingAgreementCustomerDetailsResponseDetailsType
{

    /**
     * @var PayerInfoType $PayerInfo
     * @access public
     */
    public $PayerInfo = null;

    /**
     * @var AddressType $BillingAddress
     * @access public
     */
    public $BillingAddress = null;

    /**
     * @param PayerInfoType $PayerInfo
     * @param AddressType $BillingAddress
     * @access public
     */
    public function __construct($PayerInfo, $BillingAddress)
    {
      $this->PayerInfo = $PayerInfo;
      $this->BillingAddress = $BillingAddress;
    }

}
