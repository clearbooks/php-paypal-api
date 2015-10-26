<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class CancelRecoupRequestType extends AbstractRequestType
{

    /**
     * @var EnhancedCancelRecoupRequestDetailsType $EnhancedCancelRecoupRequestDetails
     * @access public
     */
    public $EnhancedCancelRecoupRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param EnhancedCancelRecoupRequestDetailsType $EnhancedCancelRecoupRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $EnhancedCancelRecoupRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->EnhancedCancelRecoupRequestDetails = $EnhancedCancelRecoupRequestDetails;
    }

}
