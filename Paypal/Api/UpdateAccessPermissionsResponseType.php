<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class UpdateAccessPermissionsResponseType extends AbstractResponseType
{

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
     * @param string $Status
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Status)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Status = $Status;
    }

}
