<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class AddressVerifyResponseType extends AbstractResponseType
{

    /**
     * @var AddressStatusCodeType $ConfirmationCode
     * @access public
     */
    public $ConfirmationCode = null;

    /**
     * @var MatchStatusCodeType $StreetMatch
     * @access public
     */
    public $StreetMatch = null;

    /**
     * @var MatchStatusCodeType $ZipMatch
     * @access public
     */
    public $ZipMatch = null;

    /**
     * @var CountryCodeType $CountryCode
     * @access public
     */
    public $CountryCode = null;

    /**
     * @var string $PayPalToken
     * @access public
     */
    public $PayPalToken = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param AddressStatusCodeType $ConfirmationCode
     * @param MatchStatusCodeType $StreetMatch
     * @param MatchStatusCodeType $ZipMatch
     * @param CountryCodeType $CountryCode
     * @param string $PayPalToken
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $ConfirmationCode, $StreetMatch, $ZipMatch, $CountryCode, $PayPalToken)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->ConfirmationCode = $ConfirmationCode;
      $this->StreetMatch = $StreetMatch;
      $this->ZipMatch = $ZipMatch;
      $this->CountryCode = $CountryCode;
      $this->PayPalToken = $PayPalToken;
    }

}
