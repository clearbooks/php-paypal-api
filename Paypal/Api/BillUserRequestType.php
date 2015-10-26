<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BillUserRequestType extends AbstractRequestType
{

    /**
     * @var MerchantPullPaymentType $MerchantPullPaymentDetails
     * @access public
     */
    public $MerchantPullPaymentDetails = null;

    /**
     * @var int $ReturnFMFDetails
     * @access public
     */
    public $ReturnFMFDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param MerchantPullPaymentType $MerchantPullPaymentDetails
     * @param int $ReturnFMFDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $MerchantPullPaymentDetails, $ReturnFMFDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->MerchantPullPaymentDetails = $MerchantPullPaymentDetails;
      $this->ReturnFMFDetails = $ReturnFMFDetails;
    }

}
