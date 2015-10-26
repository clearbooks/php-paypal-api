<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetPalDetailsResponseType extends AbstractResponseType
{

    /**
     * @var string $Pal
     * @access public
     */
    public $Pal = null;

    /**
     * @var string $Locale
     * @access public
     */
    public $Locale = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $Pal
     * @param string $Locale
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Pal, $Locale)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Pal = $Pal;
      $this->Locale = $Locale;
    }

}
