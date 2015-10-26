<?php

namespace Paypal\Api;

class BAUpdateResponseDetailsType
{

    /**
     * @var string $BillingAgreementID
     * @access public
     */
    public $BillingAgreementID = null;

    /**
     * @var string $BillingAgreementDescription
     * @access public
     */
    public $BillingAgreementDescription = null;

    /**
     * @var MerchantPullStatusCodeType $BillingAgreementStatus
     * @access public
     */
    public $BillingAgreementStatus = null;

    /**
     * @var string $BillingAgreementCustom
     * @access public
     */
    public $BillingAgreementCustom = null;

    /**
     * @var PayerInfoType $PayerInfo
     * @access public
     */
    public $PayerInfo = null;

    /**
     * @var BasicAmountType $BillingAgreementMax
     * @access public
     */
    public $BillingAgreementMax = null;

    /**
     * @var AddressType $BillingAddress
     * @access public
     */
    public $BillingAddress = null;

    /**
     * @param string $BillingAgreementID
     * @param string $BillingAgreementDescription
     * @param MerchantPullStatusCodeType $BillingAgreementStatus
     * @param string $BillingAgreementCustom
     * @param PayerInfoType $PayerInfo
     * @param BasicAmountType $BillingAgreementMax
     * @param AddressType $BillingAddress
     * @access public
     */
    public function __construct($BillingAgreementID, $BillingAgreementDescription, $BillingAgreementStatus, $BillingAgreementCustom, $PayerInfo, $BillingAgreementMax, $BillingAddress)
    {
      $this->BillingAgreementID = $BillingAgreementID;
      $this->BillingAgreementDescription = $BillingAgreementDescription;
      $this->BillingAgreementStatus = $BillingAgreementStatus;
      $this->BillingAgreementCustom = $BillingAgreementCustom;
      $this->PayerInfo = $PayerInfo;
      $this->BillingAgreementMax = $BillingAgreementMax;
      $this->BillingAddress = $BillingAddress;
    }

}
