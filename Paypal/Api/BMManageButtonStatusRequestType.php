<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BMManageButtonStatusRequestType extends AbstractRequestType
{

    /**
     * @var string $HostedButtonID
     * @access public
     */
    public $HostedButtonID = null;

    /**
     * @var ButtonStatusType $ButtonStatus
     * @access public
     */
    public $ButtonStatus = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $HostedButtonID
     * @param ButtonStatusType $ButtonStatus
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $HostedButtonID, $ButtonStatus)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->HostedButtonID = $HostedButtonID;
      $this->ButtonStatus = $ButtonStatus;
    }

}
