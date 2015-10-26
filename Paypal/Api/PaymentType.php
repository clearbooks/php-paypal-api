<?php

namespace Paypal\Api;

class PaymentType
{

    /**
     * @var PaymentMeansType $PaymentMeans
     * @access public
     */
    public $PaymentMeans = null;

    /**
     * @param PaymentMeansType $PaymentMeans
     * @access public
     */
    public function __construct($PaymentMeans)
    {
      $this->PaymentMeans = $PaymentMeans;
    }

}
