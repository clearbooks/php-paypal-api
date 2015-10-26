<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoCancelResponseType extends AbstractResponseType
{

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
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $MsgSubID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->MsgSubID = $MsgSubID;
    }

}
