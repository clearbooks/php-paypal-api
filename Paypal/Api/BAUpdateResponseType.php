<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BAUpdateResponseType extends AbstractResponseType
{

    /**
     * @var BAUpdateResponseDetailsType $BAUpdateResponseDetails
     * @access public
     */
    public $BAUpdateResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param BAUpdateResponseDetailsType $BAUpdateResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $BAUpdateResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->BAUpdateResponseDetails = $BAUpdateResponseDetails;
    }

}
