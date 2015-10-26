<?php

namespace Paypal\Api;

class BuyerDetailsType
{

    /**
     * @var string $BuyerId
     * @access public
     */
    public $BuyerId = null;

    /**
     * @var string $BuyerUserName
     * @access public
     */
    public $BuyerUserName = null;

    /**
     * @var dateTime $BuyerRegistrationDate
     * @access public
     */
    public $BuyerRegistrationDate = null;

    /**
     * @var TaxIdDetailsType $TaxIdDetails
     * @access public
     */
    public $TaxIdDetails = null;

    /**
     * @var IdentificationInfoType $IdentificationInfo
     * @access public
     */
    public $IdentificationInfo = null;

    /**
     * @param string $BuyerId
     * @param string $BuyerUserName
     * @param dateTime $BuyerRegistrationDate
     * @param TaxIdDetailsType $TaxIdDetails
     * @param IdentificationInfoType $IdentificationInfo
     * @access public
     */
    public function __construct($BuyerId, $BuyerUserName, $BuyerRegistrationDate, $TaxIdDetails, $IdentificationInfo)
    {
      $this->BuyerId = $BuyerId;
      $this->BuyerUserName = $BuyerUserName;
      $this->BuyerRegistrationDate = $BuyerRegistrationDate;
      $this->TaxIdDetails = $TaxIdDetails;
      $this->IdentificationInfo = $IdentificationInfo;
    }

}
