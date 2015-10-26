<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BMButtonSearchResponseType extends AbstractResponseType
{

    /**
     * @var ButtonSearchResultType $ButtonSearchResult
     * @access public
     */
    public $ButtonSearchResult = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param ButtonSearchResultType $ButtonSearchResult
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $ButtonSearchResult)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->ButtonSearchResult = $ButtonSearchResult;
    }

}
