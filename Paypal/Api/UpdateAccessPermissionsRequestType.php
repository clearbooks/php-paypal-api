<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class UpdateAccessPermissionsRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $PayerID
     * @access public
     */
    public $PayerID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param UserIDType $PayerID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $PayerID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->PayerID = $PayerID;
    }

}
