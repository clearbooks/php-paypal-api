<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class UpdateAuthorizationRequestType extends AbstractRequestType
{

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var AddressType $ShipToAddress
     * @access public
     */
    public $ShipToAddress = null;

    /**
     * @var string $IPAddress
     * @access public
     */
    public $IPAddress = null;

    /**
     * @var string $ShipToStore
     * @access public
     */
    public $ShipToStore = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $TransactionID
     * @param AddressType $ShipToAddress
     * @param string $IPAddress
     * @param string $ShipToStore
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $TransactionID, $ShipToAddress, $IPAddress, $ShipToStore)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->TransactionID = $TransactionID;
      $this->ShipToAddress = $ShipToAddress;
      $this->IPAddress = $IPAddress;
      $this->ShipToStore = $ShipToStore;
    }

}
