<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class InitiateRecoupRequestType extends AbstractRequestType
{

    /**
     * @var EnhancedInitiateRecoupRequestDetailsType $EnhancedInitiateRecoupRequestDetails
     * @access public
     */
    public $EnhancedInitiateRecoupRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param EnhancedInitiateRecoupRequestDetailsType $EnhancedInitiateRecoupRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $EnhancedInitiateRecoupRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->EnhancedInitiateRecoupRequestDetails = $EnhancedInitiateRecoupRequestDetails;
    }

}
