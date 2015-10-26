<?php

namespace Paypal\Api;

class UATPDetailsType
{

    /**
     * @var string $UATPNumber
     * @access public
     */
    public $UATPNumber = null;

    /**
     * @var int $ExpMonth
     * @access public
     */
    public $ExpMonth = null;

    /**
     * @var int $ExpYear
     * @access public
     */
    public $ExpYear = null;

    /**
     * @param string $UATPNumber
     * @param int $ExpMonth
     * @param int $ExpYear
     * @access public
     */
    public function __construct($UATPNumber, $ExpMonth, $ExpYear)
    {
      $this->UATPNumber = $UATPNumber;
      $this->ExpMonth = $ExpMonth;
      $this->ExpYear = $ExpYear;
    }

}
