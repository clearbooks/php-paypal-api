<?php

namespace Paypal\Api;

class IncentiveApplyIndicationType
{

    /**
     * @var string $PaymentRequestID
     * @access public
     */
    public $PaymentRequestID = null;

    /**
     * @var string $ItemId
     * @access public
     */
    public $ItemId = null;

    /**
     * @param string $PaymentRequestID
     * @param string $ItemId
     * @access public
     */
    public function __construct($PaymentRequestID, $ItemId)
    {
      $this->PaymentRequestID = $PaymentRequestID;
      $this->ItemId = $ItemId;
    }

}
