<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class SetAccessPermissionsResponseType extends AbstractResponseType
{

    /**
     * @var AuthFlowTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param AuthFlowTokenType $Token
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Token)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Token = $Token;
    }

}
