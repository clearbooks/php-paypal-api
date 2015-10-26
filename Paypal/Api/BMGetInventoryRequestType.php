<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BMGetInventoryRequestType extends AbstractRequestType
{

    /**
     * @var string $HostedButtonID
     * @access public
     */
    public $HostedButtonID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $HostedButtonID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $HostedButtonID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->HostedButtonID = $HostedButtonID;
    }

}
