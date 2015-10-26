<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class ReverseTransactionResponseType extends AbstractResponseType
{

    /**
     * @var ReverseTransactionResponseDetailsType $ReverseTransactionResponseDetails
     * @access public
     */
    public $ReverseTransactionResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param ReverseTransactionResponseDetailsType $ReverseTransactionResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $ReverseTransactionResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->ReverseTransactionResponseDetails = $ReverseTransactionResponseDetails;
    }

}
