<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class UpdateAuthorizationResponseType extends AbstractResponseType
{

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var AuthorizationInfoType $AuthorizationInfo
     * @access public
     */
    public $AuthorizationInfo = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $TransactionID
     * @param AuthorizationInfoType $AuthorizationInfo
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $TransactionID, $AuthorizationInfo)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->TransactionID = $TransactionID;
      $this->AuthorizationInfo = $AuthorizationInfo;
    }

}
