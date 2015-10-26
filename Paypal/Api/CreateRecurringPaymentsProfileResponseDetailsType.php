<?php

namespace Paypal\Api;

class CreateRecurringPaymentsProfileResponseDetailsType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @var RecurringPaymentsProfileStatusType $ProfileStatus
     * @access public
     */
    public $ProfileStatus = null;

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var string $DCCProcessorResponse
     * @access public
     */
    public $DCCProcessorResponse = null;

    /**
     * @var string $DCCReturnCode
     * @access public
     */
    public $DCCReturnCode = null;

    /**
     * @param string $ProfileID
     * @param RecurringPaymentsProfileStatusType $ProfileStatus
     * @param string $TransactionID
     * @param string $DCCProcessorResponse
     * @param string $DCCReturnCode
     * @access public
     */
    public function __construct($ProfileID, $ProfileStatus, $TransactionID, $DCCProcessorResponse, $DCCReturnCode)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileStatus = $ProfileStatus;
      $this->TransactionID = $TransactionID;
      $this->DCCProcessorResponse = $DCCProcessorResponse;
      $this->DCCReturnCode = $DCCReturnCode;
    }

}
