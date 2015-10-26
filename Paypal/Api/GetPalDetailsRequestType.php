<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetPalDetailsRequestType extends AbstractRequestType
{

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
    }

}
