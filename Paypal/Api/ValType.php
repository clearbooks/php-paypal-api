<?php

namespace Paypal\Api;

class ValType
{

    /**
     * @var string $ValueLiteral
     * @access public
     */
    public $ValueLiteral = null;

    /**
     * @var string $ValueID
     * @access public
     */
    public $ValueID = null;

    /**
     * @param string $ValueLiteral
     * @param string $ValueID
     * @access public
     */
    public function __construct($ValueLiteral, $ValueID)
    {
      $this->ValueLiteral = $ValueLiteral;
      $this->ValueID = $ValueID;
    }

}
