<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class UpdateRecurringPaymentsProfileRequestType extends AbstractRequestType
{

    /**
     * @var UpdateRecurringPaymentsProfileRequestDetailsType $UpdateRecurringPaymentsProfileRequestDetails
     * @access public
     */
    public $UpdateRecurringPaymentsProfileRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param UpdateRecurringPaymentsProfileRequestDetailsType $UpdateRecurringPaymentsProfileRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $UpdateRecurringPaymentsProfileRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->UpdateRecurringPaymentsProfileRequestDetails = $UpdateRecurringPaymentsProfileRequestDetails;
    }

}
