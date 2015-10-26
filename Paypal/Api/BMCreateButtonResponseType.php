<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BMCreateButtonResponseType extends AbstractResponseType
{

    /**
     * @var string $Website
     * @access public
     */
    public $Website = null;

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var string $Mobile
     * @access public
     */
    public $Mobile = null;

    /**
     * @var string $HostedButtonID
     * @access public
     */
    public $HostedButtonID = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $Website
     * @param string $Email
     * @param string $Mobile
     * @param string $HostedButtonID
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Website, $Email, $Mobile, $HostedButtonID)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Website = $Website;
      $this->Email = $Email;
      $this->Mobile = $Mobile;
      $this->HostedButtonID = $HostedButtonID;
    }

}
