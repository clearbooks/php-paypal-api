<?php

namespace Paypal\Api;

class SellerType
{

    /**
     * @var boolean $AllowPaymentEdit
     * @access public
     */
    public $AllowPaymentEdit = null;

    /**
     * @var CurrencyCodeType $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @var boolean $CheckoutEnabled
     * @access public
     */
    public $CheckoutEnabled = null;

    /**
     * @var boolean $CIPBankAccountStored
     * @access public
     */
    public $CIPBankAccountStored = null;

    /**
     * @var boolean $GoodStanding
     * @access public
     */
    public $GoodStanding = null;

    /**
     * @var boolean $LiveAuctionAuthorized
     * @access public
     */
    public $LiveAuctionAuthorized = null;

    /**
     * @var MerchandizingPrefCodeType $MerchandizingPref
     * @access public
     */
    public $MerchandizingPref = null;

    /**
     * @var boolean $QualifiesForB2BVAT
     * @access public
     */
    public $QualifiesForB2BVAT = null;

    /**
     * @var SellerLevelCodeType $SellerLevel
     * @access public
     */
    public $SellerLevel = null;

    /**
     * @var AddressType $SellerPaymentAddress
     * @access public
     */
    public $SellerPaymentAddress = null;

    /**
     * @var SchedulingInfoType $SchedulingInfo
     * @access public
     */
    public $SchedulingInfo = null;

    /**
     * @var boolean $StoreOwner
     * @access public
     */
    public $StoreOwner = null;

    /**
     * @var anyURI $StoreURL
     * @access public
     */
    public $StoreURL = null;

    /**
     * @param boolean $AllowPaymentEdit
     * @param CurrencyCodeType $BillingCurrency
     * @param boolean $CheckoutEnabled
     * @param boolean $CIPBankAccountStored
     * @param boolean $GoodStanding
     * @param boolean $LiveAuctionAuthorized
     * @param MerchandizingPrefCodeType $MerchandizingPref
     * @param boolean $QualifiesForB2BVAT
     * @param SellerLevelCodeType $SellerLevel
     * @param AddressType $SellerPaymentAddress
     * @param SchedulingInfoType $SchedulingInfo
     * @param boolean $StoreOwner
     * @param anyURI $StoreURL
     * @access public
     */
    public function __construct($AllowPaymentEdit, $BillingCurrency, $CheckoutEnabled, $CIPBankAccountStored, $GoodStanding, $LiveAuctionAuthorized, $MerchandizingPref, $QualifiesForB2BVAT, $SellerLevel, $SellerPaymentAddress, $SchedulingInfo, $StoreOwner, $StoreURL)
    {
      $this->AllowPaymentEdit = $AllowPaymentEdit;
      $this->BillingCurrency = $BillingCurrency;
      $this->CheckoutEnabled = $CheckoutEnabled;
      $this->CIPBankAccountStored = $CIPBankAccountStored;
      $this->GoodStanding = $GoodStanding;
      $this->LiveAuctionAuthorized = $LiveAuctionAuthorized;
      $this->MerchandizingPref = $MerchandizingPref;
      $this->QualifiesForB2BVAT = $QualifiesForB2BVAT;
      $this->SellerLevel = $SellerLevel;
      $this->SellerPaymentAddress = $SellerPaymentAddress;
      $this->SchedulingInfo = $SchedulingInfo;
      $this->StoreOwner = $StoreOwner;
      $this->StoreURL = $StoreURL;
    }

}
