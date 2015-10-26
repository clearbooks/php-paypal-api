<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetTransactionDetailsResponseType extends AbstractResponseType
{

    /**
     * @var PaymentTransactionType $PaymentTransactionDetails
     * @access public
     */
    public $PaymentTransactionDetails = null;

    /**
     * @var ThreeDSecureInfoType $ThreeDSecureDetails
     * @access public
     */
    public $ThreeDSecureDetails = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param PaymentTransactionType $PaymentTransactionDetails
     * @param ThreeDSecureInfoType $ThreeDSecureDetails
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $PaymentTransactionDetails, $ThreeDSecureDetails)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->PaymentTransactionDetails = $PaymentTransactionDetails;
      $this->ThreeDSecureDetails = $ThreeDSecureDetails;
    }

}
