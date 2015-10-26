<?php

namespace Paypal\Api;

class BillingAgreementDetailsType
{

    /**
     * @var BillingCodeType $BillingType
     * @access public
     */
    public $BillingType = null;

    /**
     * @var string $BillingAgreementDescription
     * @access public
     */
    public $BillingAgreementDescription = null;

    /**
     * @var MerchantPullPaymentCodeType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var string $BillingAgreementCustom
     * @access public
     */
    public $BillingAgreementCustom = null;

    /**
     * @param BillingCodeType $BillingType
     * @param string $BillingAgreementDescription
     * @param MerchantPullPaymentCodeType $PaymentType
     * @param string $BillingAgreementCustom
     * @access public
     */
    public function __construct($BillingType, $BillingAgreementDescription, $PaymentType, $BillingAgreementCustom)
    {
      $this->BillingType = $BillingType;
      $this->BillingAgreementDescription = $BillingAgreementDescription;
      $this->PaymentType = $PaymentType;
      $this->BillingAgreementCustom = $BillingAgreementCustom;
    }

}
