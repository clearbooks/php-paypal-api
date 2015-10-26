<?php

namespace Paypal\Api;

class QuantityType
{

    /**
     * @var float $_
     * @access public
     */
    public $_ = null;

    /**
     * @var string $unit
     * @access public
     */
    public $unit = null;

    /**
     * @param float $_
     * @param string $unit
     * @access public
     */
    public function __construct($_, $unit)
    {
      $this->_ = $_;
      $this->unit = $unit;
    }

}
