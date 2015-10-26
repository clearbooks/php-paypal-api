<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class AddressVerifyRequestType extends AbstractRequestType
{

    /**
     * @var EmailAddressType $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var string $Street
     * @access public
     */
    public $Street = null;

    /**
     * @var string $Zip
     * @access public
     */
    public $Zip = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param EmailAddressType $Email
     * @param string $Street
     * @param string $Zip
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $Email, $Street, $Zip)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->Email = $Email;
      $this->Street = $Street;
      $this->Zip = $Zip;
    }

}
