<?php

namespace Paypal\Api;

class ErrorType
{

    /**
     * @var string $ShortMessage
     * @access public
     */
    public $ShortMessage = null;

    /**
     * @var string $LongMessage
     * @access public
     */
    public $LongMessage = null;

    /**
     * @var string $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @var SeverityCodeType $SeverityCode
     * @access public
     */
    public $SeverityCode = null;

    /**
     * @var ErrorParameterType[] $ErrorParameters
     * @access public
     */
    public $ErrorParameters = null;

    /**
     * @param string $ShortMessage
     * @param string $LongMessage
     * @param string $ErrorCode
     * @param SeverityCodeType $SeverityCode
     * @param ErrorParameterType[] $ErrorParameters
     * @access public
     */
    public function __construct($ShortMessage, $LongMessage, $ErrorCode, $SeverityCode, $ErrorParameters)
    {
      $this->ShortMessage = $ShortMessage;
      $this->LongMessage = $LongMessage;
      $this->ErrorCode = $ErrorCode;
      $this->SeverityCode = $SeverityCode;
      $this->ErrorParameters = $ErrorParameters;
    }

}
