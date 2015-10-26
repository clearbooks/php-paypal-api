<?php

namespace Paypal\Api;

class CoupledBucketsType
{

    /**
     * @var CoupleType $CoupleType
     * @access public
     */
    public $CoupleType = null;

    /**
     * @var string $CoupledPaymentRequestID
     * @access public
     */
    public $CoupledPaymentRequestID = null;

    /**
     * @var string $PaymentRequestID
     * @access public
     */
    public $PaymentRequestID = null;

    /**
     * @param CoupleType $CoupleType
     * @param string $CoupledPaymentRequestID
     * @param string $PaymentRequestID
     * @access public
     */
    public function __construct($CoupleType, $CoupledPaymentRequestID, $PaymentRequestID)
    {
      $this->CoupleType = $CoupleType;
      $this->CoupledPaymentRequestID = $CoupledPaymentRequestID;
      $this->PaymentRequestID = $PaymentRequestID;
    }

}
