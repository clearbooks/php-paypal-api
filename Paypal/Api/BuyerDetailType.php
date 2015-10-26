<?php

namespace Paypal\Api;

class BuyerDetailType
{

    /**
     * @var IdentificationInfoType $IdentificationInfo
     * @access public
     */
    public $IdentificationInfo = null;

    /**
     * @var string $RiskSessionCorrelationID
     * @access public
     */
    public $RiskSessionCorrelationID = null;

    /**
     * @var string $BuyerIPAddress
     * @access public
     */
    public $BuyerIPAddress = null;

    /**
     * @param IdentificationInfoType $IdentificationInfo
     * @param string $RiskSessionCorrelationID
     * @param string $BuyerIPAddress
     * @access public
     */
    public function __construct($IdentificationInfo, $RiskSessionCorrelationID, $BuyerIPAddress)
    {
      $this->IdentificationInfo = $IdentificationInfo;
      $this->RiskSessionCorrelationID = $RiskSessionCorrelationID;
      $this->BuyerIPAddress = $BuyerIPAddress;
    }

}
