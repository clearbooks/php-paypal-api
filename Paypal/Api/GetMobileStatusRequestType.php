<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetMobileStatusRequestType extends AbstractRequestType
{

    /**
     * @var GetMobileStatusRequestDetailsType $GetMobileStatusRequestDetails
     * @access public
     */
    public $GetMobileStatusRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param GetMobileStatusRequestDetailsType $GetMobileStatusRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $GetMobileStatusRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->GetMobileStatusRequestDetails = $GetMobileStatusRequestDetails;
    }

}
