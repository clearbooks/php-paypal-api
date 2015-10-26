<?php

namespace Paypal\Api;

class ErrorParameterType
{

    /**
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     * @var string $ParamID
     * @access public
     */
    public $ParamID = null;

    /**
     * @param string $Value
     * @param string $ParamID
     * @access public
     */
    public function __construct($Value, $ParamID)
    {
      $this->Value = $Value;
      $this->ParamID = $ParamID;
    }

}
