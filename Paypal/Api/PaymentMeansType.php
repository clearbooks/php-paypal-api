<?php

namespace Paypal\Api;

class PaymentMeansType
{

    /**
     * @var SellerPaymentMethodCodeType $TypeCodeID
     * @access public
     */
    public $TypeCodeID = null;

    /**
     * @param SellerPaymentMethodCodeType $TypeCodeID
     * @access public
     */
    public function __construct($TypeCodeID)
    {
      $this->TypeCodeID = $TypeCodeID;
    }

}
