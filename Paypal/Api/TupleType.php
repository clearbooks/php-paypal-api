<?php

namespace Paypal\Api;

class TupleType
{

    /**
     * @var string $Key
     * @access public
     */
    public $Key = null;

    /**
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     * @param string $Key
     * @param string $Value
     * @access public
     */
    public function __construct($Key, $Value)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

}
