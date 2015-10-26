<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class CreateMobilePaymentRequestType extends AbstractRequestType
{

    /**
     * @var CreateMobilePaymentRequestDetailsType $CreateMobilePaymentRequestDetails
     * @access public
     */
    public $CreateMobilePaymentRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param CreateMobilePaymentRequestDetailsType $CreateMobilePaymentRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $CreateMobilePaymentRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->CreateMobilePaymentRequestDetails = $CreateMobilePaymentRequestDetails;
    }

}
