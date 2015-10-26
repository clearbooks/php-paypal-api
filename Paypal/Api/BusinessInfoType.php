<?php

namespace Paypal\Api;

class BusinessInfoType
{

    /**
     * @var BusinessTypeType $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var NameType $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var AddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $WorkPhone
     * @access public
     */
    public $WorkPhone = null;

    /**
     * @var BusinessCategoryType $Category
     * @access public
     */
    public $Category = null;

    /**
     * @var BusinessSubCategoryType $SubCategory
     * @access public
     */
    public $SubCategory = null;

    /**
     * @var AverageTransactionPriceType $AveragePrice
     * @access public
     */
    public $AveragePrice = null;

    /**
     * @var AverageMonthlyVolumeType $AverageMonthlyVolume
     * @access public
     */
    public $AverageMonthlyVolume = null;

    /**
     * @var SalesVenueType $SalesVenue
     * @access public
     */
    public $SalesVenue = null;

    /**
     * @var string $Website
     * @access public
     */
    public $Website = null;

    /**
     * @var PercentageRevenueFromOnlineSalesType $RevenueFromOnlineSales
     * @access public
     */
    public $RevenueFromOnlineSales = null;

    /**
     * @var dateTime $BusinessEstablished
     * @access public
     */
    public $BusinessEstablished = null;

    /**
     * @var EmailAddressType $CustomerServiceEmail
     * @access public
     */
    public $CustomerServiceEmail = null;

    /**
     * @var string $CustomerServicePhone
     * @access public
     */
    public $CustomerServicePhone = null;

    /**
     * @param BusinessTypeType $Type
     * @param NameType $Name
     * @param AddressType $Address
     * @param string $WorkPhone
     * @param BusinessCategoryType $Category
     * @param BusinessSubCategoryType $SubCategory
     * @param AverageTransactionPriceType $AveragePrice
     * @param AverageMonthlyVolumeType $AverageMonthlyVolume
     * @param SalesVenueType $SalesVenue
     * @param string $Website
     * @param PercentageRevenueFromOnlineSalesType $RevenueFromOnlineSales
     * @param dateTime $BusinessEstablished
     * @param EmailAddressType $CustomerServiceEmail
     * @param string $CustomerServicePhone
     * @access public
     */
    public function __construct($Type, $Name, $Address, $WorkPhone, $Category, $SubCategory, $AveragePrice, $AverageMonthlyVolume, $SalesVenue, $Website, $RevenueFromOnlineSales, $BusinessEstablished, $CustomerServiceEmail, $CustomerServicePhone)
    {
      $this->Type = $Type;
      $this->Name = $Name;
      $this->Address = $Address;
      $this->WorkPhone = $WorkPhone;
      $this->Category = $Category;
      $this->SubCategory = $SubCategory;
      $this->AveragePrice = $AveragePrice;
      $this->AverageMonthlyVolume = $AverageMonthlyVolume;
      $this->SalesVenue = $SalesVenue;
      $this->Website = $Website;
      $this->RevenueFromOnlineSales = $RevenueFromOnlineSales;
      $this->BusinessEstablished = $BusinessEstablished;
      $this->CustomerServiceEmail = $CustomerServiceEmail;
      $this->CustomerServicePhone = $CustomerServicePhone;
    }

}
