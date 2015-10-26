<?php

namespace Paypal\Api;

include_once('DoExpressCheckoutPaymentResponseType.php');

class DoUATPExpressCheckoutPaymentResponseType extends DoExpressCheckoutPaymentResponseType
{

    /**
     * @var UATPDetailsType $UATPDetails
     * @access public
     */
    public $UATPDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param DoExpressCheckoutPaymentResponseDetailsType $DoExpressCheckoutPaymentResponseDetails
     * @param FMFDetailsType $FMFDetails
     * @param UATPDetailsType $UATPDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoExpressCheckoutPaymentResponseDetails, $FMFDetails, $UATPDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoExpressCheckoutPaymentResponseDetails, $FMFDetails);
      $this->UATPDetails = $UATPDetails;
    }

}
