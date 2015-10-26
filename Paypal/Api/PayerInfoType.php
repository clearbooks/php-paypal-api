<?php

namespace Paypal\Api;

class PayerInfoType
{

    /**
     * @var EmailAddressType $Payer
     * @access public
     */
    public $Payer = null;

    /**
     * @var UserIDType $PayerID
     * @access public
     */
    public $PayerID = null;

    /**
     * @var PayPalUserStatusCodeType $PayerStatus
     * @access public
     */
    public $PayerStatus = null;

    /**
     * @var PersonNameType $PayerName
     * @access public
     */
    public $PayerName = null;

    /**
     * @var CountryCodeType $PayerCountry
     * @access public
     */
    public $PayerCountry = null;

    /**
     * @var string $PayerBusiness
     * @access public
     */
    public $PayerBusiness = null;

    /**
     * @var AddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $ContactPhone
     * @access public
     */
    public $ContactPhone = null;

    /**
     * @var WalletItemsType[] $WalletItems
     * @access public
     */
    public $WalletItems = null;

    /**
     * @var TaxIdDetailsType $TaxIdDetails
     * @access public
     */
    public $TaxIdDetails = null;

    /**
     * @var EnhancedPayerInfoType $EnhancedPayerInfo
     * @access public
     */
    public $EnhancedPayerInfo = null;

    /**
     * @param EmailAddressType $Payer
     * @param UserIDType $PayerID
     * @param PayPalUserStatusCodeType $PayerStatus
     * @param PersonNameType $PayerName
     * @param CountryCodeType $PayerCountry
     * @param string $PayerBusiness
     * @param AddressType $Address
     * @param string $ContactPhone
     * @param WalletItemsType[] $WalletItems
     * @param TaxIdDetailsType $TaxIdDetails
     * @param EnhancedPayerInfoType $EnhancedPayerInfo
     * @access public
     */
    public function __construct($Payer, $PayerID, $PayerStatus, $PayerName, $PayerCountry, $PayerBusiness, $Address, $ContactPhone, $WalletItems, $TaxIdDetails, $EnhancedPayerInfo)
    {
      $this->Payer = $Payer;
      $this->PayerID = $PayerID;
      $this->PayerStatus = $PayerStatus;
      $this->PayerName = $PayerName;
      $this->PayerCountry = $PayerCountry;
      $this->PayerBusiness = $PayerBusiness;
      $this->Address = $Address;
      $this->ContactPhone = $ContactPhone;
      $this->WalletItems = $WalletItems;
      $this->TaxIdDetails = $TaxIdDetails;
      $this->EnhancedPayerInfo = $EnhancedPayerInfo;
    }

}
