<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BAUpdateRequestType extends AbstractRequestType
{

    /**
     * @var string $ReferenceID
     * @access public
     */
    public $ReferenceID = null;

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
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $ReferenceID
     * @param string $BillingAgreementDescription
     * @param MerchantPullStatusCodeType $BillingAgreementStatus
     * @param string $BillingAgreementCustom
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ReferenceID, $BillingAgreementDescription, $BillingAgreementStatus, $BillingAgreementCustom)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ReferenceID = $ReferenceID;
      $this->BillingAgreementDescription = $BillingAgreementDescription;
      $this->BillingAgreementStatus = $BillingAgreementStatus;
      $this->BillingAgreementCustom = $BillingAgreementCustom;
    }

}
