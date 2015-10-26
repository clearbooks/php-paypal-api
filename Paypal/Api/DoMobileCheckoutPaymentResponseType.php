<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoMobileCheckoutPaymentResponseType extends AbstractResponseType
{

    /**
     * @var DoMobileCheckoutPaymentResponseDetailsType $DoMobileCheckoutPaymentResponseDetails
     * @access public
     */
    public $DoMobileCheckoutPaymentResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param DoMobileCheckoutPaymentResponseDetailsType $DoMobileCheckoutPaymentResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoMobileCheckoutPaymentResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->DoMobileCheckoutPaymentResponseDetails = $DoMobileCheckoutPaymentResponseDetails;
    }

}
