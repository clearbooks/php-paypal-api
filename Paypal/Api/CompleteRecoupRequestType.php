<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class CompleteRecoupRequestType extends AbstractRequestType
{

    /**
     * @var EnhancedCompleteRecoupRequestDetailsType $EnhancedCompleteRecoupRequestDetails
     * @access public
     */
    public $EnhancedCompleteRecoupRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param EnhancedCompleteRecoupRequestDetailsType $EnhancedCompleteRecoupRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $EnhancedCompleteRecoupRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->EnhancedCompleteRecoupRequestDetails = $EnhancedCompleteRecoupRequestDetails;
    }

}
