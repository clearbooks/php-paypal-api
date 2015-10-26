<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoNonReferencedCreditRequestType extends AbstractRequestType
{

    /**
     * @var DoNonReferencedCreditRequestDetailsType $DoNonReferencedCreditRequestDetails
     * @access public
     */
    public $DoNonReferencedCreditRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param DoNonReferencedCreditRequestDetailsType $DoNonReferencedCreditRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $DoNonReferencedCreditRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->DoNonReferencedCreditRequestDetails = $DoNonReferencedCreditRequestDetails;
    }

}
