<?php

namespace Paypal\Api;

include_once('DoAuthorizationResponseType.php');

class DoUATPAuthorizationResponseType extends DoAuthorizationResponseType
{

    /**
     * @var UATPDetailsType $UATPDetails
     * @access public
     */
    public $UATPDetails = null;

    /**
     * @var string $AuthorizationCode
     * @access public
     */
    public $AuthorizationCode = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $TransactionID
     * @param BasicAmountType $Amount
     * @param AuthorizationInfoType $AuthorizationInfo
     * @param string $MsgSubID
     * @param UATPDetailsType $UATPDetails
     * @param string $AuthorizationCode
     * @param string $InvoiceID
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $TransactionID, $Amount, $AuthorizationInfo, $MsgSubID, $UATPDetails, $AuthorizationCode, $InvoiceID, $MsgSubID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $TransactionID, $Amount, $AuthorizationInfo, $MsgSubID);
      $this->UATPDetails = $UATPDetails;
      $this->AuthorizationCode = $AuthorizationCode;
      $this->InvoiceID = $InvoiceID;
      $this->MsgSubID = $MsgSubID;
    }

}
