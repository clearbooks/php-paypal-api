<?php

namespace Paypal\Api;

class FaultDetailsType
{

    /**
     * @var string $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @var string $Severity
     * @access public
     */
    public $Severity = null;

    /**
     * @var string $DetailedMessage
     * @access public
     */
    public $DetailedMessage = null;

    /**
     * @param string $ErrorCode
     * @param string $Severity
     * @param string $DetailedMessage
     * @access public
     */
    public function __construct($ErrorCode, $Severity, $DetailedMessage)
    {
      $this->ErrorCode = $ErrorCode;
      $this->Severity = $Severity;
      $this->DetailedMessage = $DetailedMessage;
    }

}
