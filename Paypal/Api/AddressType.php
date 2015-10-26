<?php

namespace Paypal\Api;

class AddressType
{

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $Street1
     * @access public
     */
    public $Street1 = null;

    /**
     * @var string $Street2
     * @access public
     */
    public $Street2 = null;

    /**
     * @var string $CityName
     * @access public
     */
    public $CityName = null;

    /**
     * @var string $StateOrProvince
     * @access public
     */
    public $StateOrProvince = null;

    /**
     * @var CountryCodeType $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var string $CountryName
     * @access public
     */
    public $CountryName = null;

    /**
     * @var string $Phone
     * @access public
     */
    public $Phone = null;

    /**
     * @var string $PostalCode
     * @access public
     */
    public $PostalCode = null;

    /**
     * @var string $AddressID
     * @access public
     */
    public $AddressID = null;

    /**
     * @var AddressOwnerCodeType $AddressOwner
     * @access public
     */
    public $AddressOwner = null;

    /**
     * @var string $ExternalAddressID
     * @access public
     */
    public $ExternalAddressID = null;

    /**
     * @var string $InternationalName
     * @access public
     */
    public $InternationalName = null;

    /**
     * @var string $InternationalStateAndCity
     * @access public
     */
    public $InternationalStateAndCity = null;

    /**
     * @var string $InternationalStreet
     * @access public
     */
    public $InternationalStreet = null;

    /**
     * @var AddressStatusCodeType $AddressStatus
     * @access public
     */
    public $AddressStatus = null;

    /**
     * @var AddressNormalizationStatusCodeType $AddressNormalizationStatus
     * @access public
     */
    public $AddressNormalizationStatus = null;

    /**
     * @param string $Name
     * @param string $Street1
     * @param string $Street2
     * @param string $CityName
     * @param string $StateOrProvince
     * @param CountryCodeType $Country
     * @param string $CountryName
     * @param string $Phone
     * @param string $PostalCode
     * @param string $AddressID
     * @param AddressOwnerCodeType $AddressOwner
     * @param string $ExternalAddressID
     * @param string $InternationalName
     * @param string $InternationalStateAndCity
     * @param string $InternationalStreet
     * @param AddressStatusCodeType $AddressStatus
     * @param AddressNormalizationStatusCodeType $AddressNormalizationStatus
     * @access public
     */
    public function __construct($Name, $Street1, $Street2, $CityName, $StateOrProvince, $Country, $CountryName, $Phone, $PostalCode, $AddressID, $AddressOwner, $ExternalAddressID, $InternationalName, $InternationalStateAndCity, $InternationalStreet, $AddressStatus, $AddressNormalizationStatus)
    {
      $this->Name = $Name;
      $this->Street1 = $Street1;
      $this->Street2 = $Street2;
      $this->CityName = $CityName;
      $this->StateOrProvince = $StateOrProvince;
      $this->Country = $Country;
      $this->CountryName = $CountryName;
      $this->Phone = $Phone;
      $this->PostalCode = $PostalCode;
      $this->AddressID = $AddressID;
      $this->AddressOwner = $AddressOwner;
      $this->ExternalAddressID = $ExternalAddressID;
      $this->InternationalName = $InternationalName;
      $this->InternationalStateAndCity = $InternationalStateAndCity;
      $this->InternationalStreet = $InternationalStreet;
      $this->AddressStatus = $AddressStatus;
      $this->AddressNormalizationStatus = $AddressNormalizationStatus;
    }

}
