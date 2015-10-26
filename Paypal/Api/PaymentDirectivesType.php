<?php

namespace Paypal\Api;

class PaymentDirectivesType
{

    /**
     * @var MerchantPullPaymentCodeType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @param MerchantPullPaymentCodeType $PaymentType
     * @access public
     */
    public function __construct($PaymentType)
    {
      $this->PaymentType = $PaymentType;
    }

}
