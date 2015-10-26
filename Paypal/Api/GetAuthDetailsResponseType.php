<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetAuthDetailsResponseType extends AbstractResponseType
{

    /**
     * @var GetAuthDetailsResponseDetailsType $GetAuthDetailsResponseDetails
     * @access public
     */
    public $GetAuthDetailsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetAuthDetailsResponseDetailsType $GetAuthDetailsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetAuthDetailsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetAuthDetailsResponseDetails = $GetAuthDetailsResponseDetails;
    }

}
