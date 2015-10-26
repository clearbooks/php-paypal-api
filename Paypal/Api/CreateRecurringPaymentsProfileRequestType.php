<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class CreateRecurringPaymentsProfileRequestType extends AbstractRequestType
{

    /**
     * @var CreateRecurringPaymentsProfileRequestDetailsType $CreateRecurringPaymentsProfileRequestDetails
     * @access public
     */
    public $CreateRecurringPaymentsProfileRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param CreateRecurringPaymentsProfileRequestDetailsType $CreateRecurringPaymentsProfileRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $CreateRecurringPaymentsProfileRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->CreateRecurringPaymentsProfileRequestDetails = $CreateRecurringPaymentsProfileRequestDetails;
    }

}
