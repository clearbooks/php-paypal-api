<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetIncentiveEvaluationResponseType extends AbstractResponseType
{

    /**
     * @var GetIncentiveEvaluationResponseDetailsType $GetIncentiveEvaluationResponseDetails
     * @access public
     */
    public $GetIncentiveEvaluationResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetIncentiveEvaluationResponseDetailsType $GetIncentiveEvaluationResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetIncentiveEvaluationResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetIncentiveEvaluationResponseDetails = $GetIncentiveEvaluationResponseDetails;
    }

}
