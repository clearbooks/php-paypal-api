<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetBalanceRequestType extends AbstractRequestType
{

    /**
     * @var string $ReturnAllCurrencies
     * @access public
     */
    public $ReturnAllCurrencies = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $ReturnAllCurrencies
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ReturnAllCurrencies)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ReturnAllCurrencies = $ReturnAllCurrencies;
    }

}
