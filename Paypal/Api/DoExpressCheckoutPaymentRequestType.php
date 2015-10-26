<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoExpressCheckoutPaymentRequestType extends AbstractRequestType
{

    /**
     * @var DoExpressCheckoutPaymentRequestDetailsType $DoExpressCheckoutPaymentRequestDetails
     * @access public
     */
    public $DoExpressCheckoutPaymentRequestDetails = null;

    /**
     * @var int $ReturnFMFDetails
     * @access public
     */
    public $ReturnFMFDetails = null;

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
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->DoExpressCheckoutPaymentRequestDetails = $DoExpressCheckoutPaymentRequestDetails;
      $this->ReturnFMFDetails = $ReturnFMFDetails;
    }

}
