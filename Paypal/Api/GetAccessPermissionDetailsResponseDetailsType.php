<?php

namespace Paypal\Api;

class GetAccessPermissionDetailsResponseDetailsType
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
     * @var string[] $AccessPermissionName
     * @access public
     */
    public $AccessPermissionName = null;

    /**
     * @var string[] $AccessPermissionStatus
     * @access public
     */
    public $AccessPermissionStatus = null;

    /**
     * @var UserIDType $PayerID
     * @access public
     */
    public $PayerID = null;

    /**
     * @param string $FirstName
     * @param string $LastName
     * @param string $Email
     * @param string[] $AccessPermissionName
     * @param string[] $AccessPermissionStatus
     * @param UserIDType $PayerID
     * @access public
     */
    public function __construct($FirstName, $LastName, $Email, $AccessPermissionName, $AccessPermissionStatus, $PayerID)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Email = $Email;
      $this->AccessPermissionName = $AccessPermissionName;
      $this->AccessPermissionStatus = $AccessPermissionStatus;
      $this->PayerID = $PayerID;
    }

}
