<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoAuthorizationResponseType extends AbstractResponseType
{

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var AuthorizationInfoType $AuthorizationInfo
     * @access public
     */
    public $AuthorizationInfo = null;

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
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $TransactionID, $Amount, $AuthorizationInfo, $MsgSubID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->TransactionID = $TransactionID;
      $this->Amount = $Amount;
      $this->AuthorizationInfo = $AuthorizationInfo;
      $this->MsgSubID = $MsgSubID;
    }

}
