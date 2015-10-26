<?php

namespace Paypal\Api;

class BankAccountDetailsType
{

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var BankAccountTypeType $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var string $RoutingNumber
     * @access public
     */
    public $RoutingNumber = null;

    /**
     * @var string $AccountNumber
     * @access public
     */
    public $AccountNumber = null;

    /**
     * @param string $Name
     * @param BankAccountTypeType $Type
     * @param string $RoutingNumber
     * @param string $AccountNumber
     * @access public
     */
    public function __construct($Name, $Type, $RoutingNumber, $AccountNumber)
    {
      $this->Name = $Name;
      $this->Type = $Type;
      $this->RoutingNumber = $RoutingNumber;
      $this->AccountNumber = $AccountNumber;
    }

}
