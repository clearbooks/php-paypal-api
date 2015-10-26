<?php

namespace Paypal\Api;

class GetAuthDetailsResponseDetailsType
{

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var UserIDType $PayerID
     * @access public
     */
    public $PayerID = null;

    /**
     * @param string $FirstName
     * @param string $LastName
     * @param string $Email
     * @param UserIDType $PayerID
     * @access public
     */
    public function __construct($FirstName, $LastName, $Email, $PayerID)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Email = $Email;
      $this->PayerID = $PayerID;
    }

}
