<?php

namespace Paypal\Api;

class CoupledPaymentInfoType
{

    /**
     * @var string $CoupledPaymentRequestID
     * @access public
     */
    public $CoupledPaymentRequestID = null;

    /**
     * @var string $CoupledPaymentID
     * @access public
     */
    public $CoupledPaymentID = null;

    /**
     * @param string $CoupledPaymentRequestID
     * @param string $CoupledPaymentID
     * @access public
     */
    public function __construct($CoupledPaymentRequestID, $CoupledPaymentID)
    {
      $this->CoupledPaymentRequestID = $CoupledPaymentRequestID;
      $this->CoupledPaymentID = $CoupledPaymentID;
    }

}
