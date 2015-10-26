<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetBoardingDetailsResponseType extends AbstractResponseType
{

    /**
     * @var GetBoardingDetailsResponseDetailsType $GetBoardingDetailsResponseDetails
     * @access public
     */
    public $GetBoardingDetailsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetBoardingDetailsResponseDetailsType $GetBoardingDetailsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetBoardingDetailsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetBoardingDetailsResponseDetails = $GetBoardingDetailsResponseDetails;
    }

}
