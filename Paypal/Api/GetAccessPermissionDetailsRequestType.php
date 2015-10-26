<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetAccessPermissionDetailsRequestType extends AbstractRequestType
{

    /**
     * @var AuthFlowTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param AuthFlowTokenType $Token
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $Token)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->Token = $Token;
    }

}
