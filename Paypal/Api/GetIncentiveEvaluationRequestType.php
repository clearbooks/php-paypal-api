<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetIncentiveEvaluationRequestType extends AbstractRequestType
{

    /**
     * @var GetIncentiveEvaluationRequestDetailsType $GetIncentiveEvaluationRequestDetails
     * @access public
     */
    public $GetIncentiveEvaluationRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param GetIncentiveEvaluationRequestDetailsType $GetIncentiveEvaluationRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $GetIncentiveEvaluationRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->GetIncentiveEvaluationRequestDetails = $GetIncentiveEvaluationRequestDetails;
    }

}
