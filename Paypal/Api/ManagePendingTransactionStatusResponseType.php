<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class ManagePendingTransactionStatusResponseType extends AbstractResponseType
{

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param TransactionId $TransactionID
     * @param string $Status
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $TransactionID, $Status)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->TransactionID = $TransactionID;
      $this->Status = $Status;
    }

}
