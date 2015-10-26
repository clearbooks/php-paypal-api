<?php

namespace Paypal\Api;

class AttributeType
{

    /**
     * @var ValType[] $Value
     * @access public
     */
    public $Value = null;

    /**
     * @var string $AttributeID
     * @access public
     */
    public $AttributeID = null;

    /**
     * @param ValType[] $Value
     * @param string $AttributeID
     * @access public
     */
    public function __construct($Value, $AttributeID)
    {
      $this->Value = $Value;
      $this->AttributeID = $AttributeID;
    }

}
