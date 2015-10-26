<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetExpressCheckoutDetailsResponseType extends AbstractResponseType
{

    /**
     * @var GetExpressCheckoutDetailsResponseDetailsType $GetExpressCheckoutDetailsResponseDetails
     * @access public
     */
    public $GetExpressCheckoutDetailsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetExpressCheckoutDetailsResponseDetailsType $GetExpressCheckoutDetailsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetExpressCheckoutDetailsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetExpressCheckoutDetailsResponseDetails = $GetExpressCheckoutDetailsResponseDetails;
    }

}
