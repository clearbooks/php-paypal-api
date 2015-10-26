<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetAccessPermissionDetailsResponseType extends AbstractResponseType
{

    /**
     * @var GetAccessPermissionDetailsResponseDetailsType $GetAccessPermissionDetailsResponseDetails
     * @access public
     */
    public $GetAccessPermissionDetailsResponseDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param GetAccessPermissionDetailsResponseDetailsType $GetAccessPermissionDetailsResponseDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $GetAccessPermissionDetailsResponseDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->GetAccessPermissionDetailsResponseDetails = $GetAccessPermissionDetailsResponseDetails;
    }

}
