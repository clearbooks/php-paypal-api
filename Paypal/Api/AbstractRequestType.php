<?php

namespace Paypal\Api;

class AbstractRequestType
{

    /**
     * @var DetailLevelCodeType[] $DetailLevel
     * @access public
     */
    public $DetailLevel = null;

    /**
     * @var string $ErrorLanguage
     * @access public
     */
    public $ErrorLanguage = null;

    /**
     * @var string $Version
     * @access public
     */
    public $Version = "87.0";

    /**
     * @var string $any
     * @access public
     */
    public $any = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any)
    {
      $this->DetailLevel = $DetailLevel;
      $this->ErrorLanguage = $ErrorLanguage;
      $this->any = $any;
    }

}
