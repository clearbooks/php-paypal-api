<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BillOutstandingAmountRequestType extends AbstractRequestType
{

    /**
     * @var BillOutstandingAmountRequestDetailsType $BillOutstandingAmountRequestDetails
     * @access public
     */
    public $BillOutstandingAmountRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param BillOutstandingAmountRequestDetailsType $BillOutstandingAmountRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $BillOutstandingAmountRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->BillOutstandingAmountRequestDetails = $BillOutstandingAmountRequestDetails;
    }

}
