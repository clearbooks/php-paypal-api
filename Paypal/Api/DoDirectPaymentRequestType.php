<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoDirectPaymentRequestType extends AbstractRequestType
{

    /**
     * @var DoDirectPaymentRequestDetailsType $DoDirectPaymentRequestDetails
     * @access public
     */
    public $DoDirectPaymentRequestDetails = null;

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
     * @param DoDirectPaymentRequestDetailsType $DoDirectPaymentRequestDetails
     * @param int $ReturnFMFDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $DoDirectPaymentRequestDetails, $ReturnFMFDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->DoDirectPaymentRequestDetails = $DoDirectPaymentRequestDetails;
      $this->ReturnFMFDetails = $ReturnFMFDetails;
    }

}
