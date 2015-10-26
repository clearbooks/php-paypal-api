<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetRecurringPaymentsProfileDetailsRequestType extends AbstractRequestType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $ProfileID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ProfileID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ProfileID = $ProfileID;
    }

}
