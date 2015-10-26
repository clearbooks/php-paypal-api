<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class CreateBillingAgreementResponseType extends AbstractResponseType
{

    /**
     * @var string $BillingAgreementID
     * @access public
     */
    public $BillingAgreementID = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $BillingAgreementID
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $BillingAgreementID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->BillingAgreementID = $BillingAgreementID;
    }

}
