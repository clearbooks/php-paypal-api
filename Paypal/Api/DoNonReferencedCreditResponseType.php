<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoNonReferencedCreditResponseType extends AbstractResponseType
{

    /**
     * @var DoNonReferencedCreditResponseDetailsType $DoNonReferencedCreditResponseDetails
     * @access public
     */
    public $DoNonReferencedCreditResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param DoNonReferencedCreditResponseDetailsType $DoNonReferencedCreditResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoNonReferencedCreditResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->DoNonReferencedCreditResponseDetails = $DoNonReferencedCreditResponseDetails;
    }

}
