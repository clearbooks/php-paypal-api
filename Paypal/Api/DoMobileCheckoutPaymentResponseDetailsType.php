<?php

namespace Paypal\Api;

class DoMobileCheckoutPaymentResponseDetailsType
{

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var PayerInfoType $PayerInfo
     * @access public
     */
    public $PayerInfo = null;

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

    /**
     * @param string $Custom
     * @param string $InvoiceID
     * @param PayerInfoType $PayerInfo
     * @param PaymentInfoType $PaymentInfo
     * @access public
     */
    public function __construct($Custom, $InvoiceID, $PayerInfo, $PaymentInfo)
    {
      $this->Custom = $Custom;
      $this->InvoiceID = $InvoiceID;
      $this->PayerInfo = $PayerInfo;
      $this->PaymentInfo = $PaymentInfo;
    }

}
