<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class ManageRecurringPaymentsProfileStatusRequestType extends AbstractRequestType
{

    /**
     * @var ManageRecurringPaymentsProfileStatusRequestDetailsType $ManageRecurringPaymentsProfileStatusRequestDetails
     * @access public
     */
    public $ManageRecurringPaymentsProfileStatusRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param ManageRecurringPaymentsProfileStatusRequestDetailsType $ManageRecurringPaymentsProfileStatusRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ManageRecurringPaymentsProfileStatusRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ManageRecurringPaymentsProfileStatusRequestDetails = $ManageRecurringPaymentsProfileStatusRequestDetails;
    }

}
