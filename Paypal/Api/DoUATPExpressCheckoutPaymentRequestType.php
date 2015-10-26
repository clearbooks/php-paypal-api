<?php

namespace Paypal\Api;

include_once('DoExpressCheckoutPaymentRequestType.php');

class DoUATPExpressCheckoutPaymentRequestType extends DoExpressCheckoutPaymentRequestType
{

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param DoExpressCheckoutPaymentRequestDetailsType $DoExpressCheckoutPaymentRequestDetails
     * @param int $ReturnFMFDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $DoExpressCheckoutPaymentRequestDetails, $ReturnFMFDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any, $DoExpressCheckoutPaymentRequestDetails, $ReturnFMFDetails);
    }

}
