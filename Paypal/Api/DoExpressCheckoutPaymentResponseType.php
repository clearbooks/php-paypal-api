<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class DoExpressCheckoutPaymentResponseType extends AbstractResponseType
{

    /**
     * @var DoExpressCheckoutPaymentResponseDetailsType $DoExpressCheckoutPaymentResponseDetails
     * @access public
     */
    public $DoExpressCheckoutPaymentResponseDetails = null;

    /**
     * @var FMFDetailsType $FMFDetails
     * @access public
     */
    public $FMFDetails = null;

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
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $DoExpressCheckoutPaymentResponseDetails, $FMFDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->DoExpressCheckoutPaymentResponseDetails = $DoExpressCheckoutPaymentResponseDetails;
      $this->FMFDetails = $FMFDetails;
    }

}
