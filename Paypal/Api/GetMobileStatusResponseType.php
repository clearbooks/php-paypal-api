<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetMobileStatusResponseType extends AbstractResponseType
{

    /**
     * @var int $IsActivated
     * @access public
     */
    public $IsActivated = null;

    /**
     * @var int $IsPasswordSet
     * @access public
     */
    public $IsPasswordSet = null;

    /**
     * @var int $PaymentPending
     * @access public
     */
    public $PaymentPending = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param int $IsActivated
     * @param int $IsPasswordSet
     * @param int $PaymentPending
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $IsActivated, $IsPasswordSet, $PaymentPending)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->IsActivated = $IsActivated;
      $this->IsPasswordSet = $IsPasswordSet;
      $this->PaymentPending = $PaymentPending;
    }

}
