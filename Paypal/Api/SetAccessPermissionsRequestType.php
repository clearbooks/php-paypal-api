<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class SetAccessPermissionsRequestType extends AbstractRequestType
{

    /**
     * @var SetAccessPermissionsRequestDetailsType $SetAccessPermissionsRequestDetails
     * @access public
     */
    public $SetAccessPermissionsRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param SetAccessPermissionsRequestDetailsType $SetAccessPermissionsRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $SetAccessPermissionsRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
    }

}
