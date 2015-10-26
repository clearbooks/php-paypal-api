<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class TransactionSearchResponseType extends AbstractResponseType
{

    /**
     * @var PaymentTransactionSearchResultType $PaymentTransactions
     * @access public
     */
    public $PaymentTransactions = null;

    /**
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param PaymentTransactionSearchResultType $PaymentTransactions
     * @access public
     */
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $PaymentTransactions)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->PaymentTransactions = $PaymentTransactions;
    }

}
