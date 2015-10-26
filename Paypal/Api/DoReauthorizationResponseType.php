<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoReauthorizationResponseType extends AbstractResponseType
{

    /**
     * @var string $AuthorizationID
     * @access public
     */
    public $AuthorizationID = null;

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
     * @param string $AuthorizationID
     * @param AuthorizationInfoType $AuthorizationInfo
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $AuthorizationID, $AuthorizationInfo, $MsgSubID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->AuthorizationID = $AuthorizationID;
      $this->AuthorizationInfo = $AuthorizationInfo;
      $this->MsgSubID = $MsgSubID;
    }

}
