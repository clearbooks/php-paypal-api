<?php

namespace Paypal\Api;

class MerchantPullPaymentResponseType
{

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
     * @var MerchantPullInfoType $MerchantPullInfo
     * @access public
     */
    public $MerchantPullInfo = null;

    /**
     * @param PayerInfoType $PayerInfo
     * @param PaymentInfoType $PaymentInfo
     * @param MerchantPullInfoType $MerchantPullInfo
     * @access public
     */
    public function __construct($PayerInfo, $PaymentInfo, $MerchantPullInfo)
    {
      $this->PayerInfo = $PayerInfo;
      $this->PaymentInfo = $PaymentInfo;
      $this->MerchantPullInfo = $MerchantPullInfo;
    }

}
