<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BMButtonSearchRequestType extends AbstractRequestType
{

    /**
     * @var dateTime $StartDate
     * @access public
     */
    public $StartDate = null;

    /**
     * @var dateTime $EndDate
     * @access public
     */
    public $EndDate = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param dateTime $StartDate
     * @param dateTime $EndDate
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $StartDate, $EndDate)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
    }

}
