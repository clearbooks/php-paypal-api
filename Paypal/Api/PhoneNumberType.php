<?php

namespace Paypal\Api;

class PhoneNumberType
{

    /**
     * @var string $CountryCode
     * @access public
     */
    public $CountryCode = null;

    /**
     * @var string $PhoneNumber
     * @access public
     */
    public $PhoneNumber = null;

    /**
     * @var string $Extension
     * @access public
     */
    public $Extension = null;

    /**
     * @param string $CountryCode
     * @param string $PhoneNumber
     * @param string $Extension
     * @access public
     */
    public function __construct($CountryCode, $PhoneNumber, $Extension)
    {
      $this->CountryCode = $CountryCode;
      $this->PhoneNumber = $PhoneNumber;
      $this->Extension = $Extension;
    }

}
