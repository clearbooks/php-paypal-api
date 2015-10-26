<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoReferenceTransactionResponseType extends AbstractResponseType
{

    /**
     * @var DoReferenceTransactionResponseDetailsType $DoReferenceTransactionResponseDetails
     * @access public
     */
    public $DoReferenceTransactionResponseDetails = null;

    /**
     * @var FMFDetailsType $FMFDetails
     * @access public
     */
    public $FMFDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param DoReferenceTransactionResponseDetailsType $DoReferenceTransactionResponseDetails
     * @param FMFDetailsType $FMFDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoReferenceTransactionResponseDetails, $FMFDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->DoReferenceTransactionResponseDetails = $DoReferenceTransactionResponseDetails;
      $this->FMFDetails = $FMFDetails;
    }

}
