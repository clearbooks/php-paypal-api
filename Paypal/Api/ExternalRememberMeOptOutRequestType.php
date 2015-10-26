<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class ExternalRememberMeOptOutRequestType extends AbstractRequestType
{

    /**
     * @var string $ExternalRememberMeID
     * @access public
     */
    public $ExternalRememberMeID = null;

    /**
     * @var ExternalRememberMeOwnerDetailsType $ExternalRememberMeOwnerDetails
     * @access public
     */
    public $ExternalRememberMeOwnerDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $ExternalRememberMeID
     * @param ExternalRememberMeOwnerDetailsType $ExternalRememberMeOwnerDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ExternalRememberMeID, $ExternalRememberMeOwnerDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ExternalRememberMeID = $ExternalRememberMeID;
      $this->ExternalRememberMeOwnerDetails = $ExternalRememberMeOwnerDetails;
    }

}
