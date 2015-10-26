<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class SetAuthFlowParamRequestType extends AbstractRequestType
{

    /**
     * @var SetAuthFlowParamRequestDetailsType $SetAuthFlowParamRequestDetails
     * @access public
     */
    public $SetAuthFlowParamRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param SetAuthFlowParamRequestDetailsType $SetAuthFlowParamRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $SetAuthFlowParamRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->SetAuthFlowParamRequestDetails = $SetAuthFlowParamRequestDetails;
    }

}
