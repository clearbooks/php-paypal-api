<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class EnterBoardingRequestType extends AbstractRequestType
{

    /**
     * @var EnterBoardingRequestDetailsType $EnterBoardingRequestDetails
     * @access public
     */
    public $EnterBoardingRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param EnterBoardingRequestDetailsType $EnterBoardingRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $EnterBoardingRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->EnterBoardingRequestDetails = $EnterBoardingRequestDetails;
    }

}
