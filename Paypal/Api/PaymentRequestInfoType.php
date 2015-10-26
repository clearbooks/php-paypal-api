<?php

namespace Paypal\Api;

class PaymentRequestInfoType
{

    /**
     * @var string $TransactionId
     * @access public
     */
    public $TransactionId = null;

    /**
     * @var string $PaymentRequestID
     * @access public
     */
    public $PaymentRequestID = null;

    /**
     * @var ErrorType $PaymentError
     * @access public
     */
    public $PaymentError = null;

    /**
     * @param string $TransactionId
     * @param string $PaymentRequestID
     * @param ErrorType $PaymentError
     * @access public
     */
    public function __construct($TransactionId, $PaymentRequestID, $PaymentError)
    {
      $this->TransactionId = $TransactionId;
      $this->PaymentRequestID = $PaymentRequestID;
      $this->PaymentError = $PaymentError;
    }

}
