<?php

namespace Paypal\Api;

class AbstractResponseType
{

    /**
     * @var dateTime $Timestamp
     * @access public
     */
    public $Timestamp = null;

    /**
     * @var AckCodeType $Ack
     * @access public
     */
    public $Ack = null;

    /**
     * @var string $CorrelationID
     * @access public
     */
    public $CorrelationID = null;

    /**
     * @var ErrorType[] $Errors
     * @access public
     */
    public $Errors = null;

    /**
     * @var string $Version
     * @access public
     */
    public $Version = "87.0";

    /**
     * @var string $Build
     * @access public
     */
    public $Build = null;

    /**
     * @var string $any
     * @access public
     */
    public $any = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any)
    {
      $this->Timestamp = $Timestamp;
      $this->Ack = $Ack;
      $this->CorrelationID = $CorrelationID;
      $this->Errors = $Errors;
      $this->Build = $Build;
      $this->any = $any;
    }

}
