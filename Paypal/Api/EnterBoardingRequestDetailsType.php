<?php

namespace Paypal\Api;

class EnterBoardingRequestDetailsType
{

    /**
     * @var string $ProgramCode
     * @access public
     */
    public $ProgramCode = null;

    /**
     * @var string $ProductList
     * @access public
     */
    public $ProductList = null;

    /**
     * @var string $PartnerCustom
     * @access public
     */
    public $PartnerCustom = null;

    /**
     * @var string $ImageUrl
     * @access public
     */
    public $ImageUrl = null;

    /**
     * @var MarketingCategoryType $MarketingCategory
     * @access public
     */
    public $MarketingCategory = null;

    /**
     * @var BusinessInfoType $BusinessInfo
     * @access public
     */
    public $BusinessInfo = null;

    /**
     * @var BusinessOwnerInfoType $OwnerInfo
     * @access public
     */
    public $OwnerInfo = null;

    /**
     * @var BankAccountDetailsType $BankAccount
     * @access public
     */
    public $BankAccount = null;

    /**
     * @param string $ProgramCode
     * @param string $ProductList
     * @param string $PartnerCustom
     * @param string $ImageUrl
     * @param MarketingCategoryType $MarketingCategory
     * @param BusinessInfoType $BusinessInfo
     * @param BusinessOwnerInfoType $OwnerInfo
     * @param BankAccountDetailsType $BankAccount
     * @access public
     */
    public function __construct($ProgramCode, $ProductList, $PartnerCustom, $ImageUrl, $MarketingCategory, $BusinessInfo, $OwnerInfo, $BankAccount)
    {
      $this->ProgramCode = $ProgramCode;
      $this->ProductList = $ProductList;
      $this->PartnerCustom = $PartnerCustom;
      $this->ImageUrl = $ImageUrl;
      $this->MarketingCategory = $MarketingCategory;
      $this->BusinessInfo = $BusinessInfo;
      $this->OwnerInfo = $OwnerInfo;
      $this->BankAccount = $BankAccount;
    }

}
