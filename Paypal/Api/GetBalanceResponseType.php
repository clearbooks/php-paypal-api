<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class GetBalanceResponseType extends AbstractResponseType
{

    /**
     * @var BasicAmountType $Balance
     * @access public
     */
    public $Balance = null;

    /**
     * @var dateTime $BalanceTimeStamp
     * @access public
     */
    public $BalanceTimeStamp = null;

    /**
     * @var BasicAmountType[] $BalanceHoldings
     * @access public
     */
    public $BalanceHoldings = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param BasicAmountType $Balance
     * @param dateTime $BalanceTimeStamp
     * @param BasicAmountType[] $BalanceHoldings
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Balance, $BalanceTimeStamp, $BalanceHoldings)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Balance = $Balance;
      $this->BalanceTimeStamp = $BalanceTimeStamp;
      $this->BalanceHoldings = $BalanceHoldings;
    }

}
