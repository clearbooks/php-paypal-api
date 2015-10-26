<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class SetExpressCheckoutRequestType extends AbstractRequestType
{

    /**
     * @var SetExpressCheckoutRequestDetailsType $SetExpressCheckoutRequestDetails
     * @access public
     */
    public $SetExpressCheckoutRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param SetExpressCheckoutRequestDetailsType $SetExpressCheckoutRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $SetExpressCheckoutRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->SetExpressCheckoutRequestDetails = $SetExpressCheckoutRequestDetails;
    }

}
