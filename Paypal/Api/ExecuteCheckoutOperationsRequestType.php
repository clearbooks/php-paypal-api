<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class ExecuteCheckoutOperationsRequestType extends AbstractRequestType
{

    /**
     * @var ExecuteCheckoutOperationsRequestDetailsType $ExecuteCheckoutOperationsRequestDetails
     * @access public
     */
    public $ExecuteCheckoutOperationsRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param ExecuteCheckoutOperationsRequestDetailsType $ExecuteCheckoutOperationsRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ExecuteCheckoutOperationsRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ExecuteCheckoutOperationsRequestDetails = $ExecuteCheckoutOperationsRequestDetails;
    }

}
