<?php

namespace Paypal\Api;

class ItemType
{

    /**
     * @var string $ApplicationData
     * @access public
     */
    public $ApplicationData = null;

    /**
     * @var ListOfAttributeSetType $ListOfAttributeSets
     * @access public
     */
    public $ListOfAttributeSets = null;

    /**
     * @var boolean $AutoPay
     * @access public
     */
    public $AutoPay = null;

    /**
     * @var BuyerProtectionCodeType $BuyerProtection
     * @access public
     */
    public $BuyerProtection = null;

    /**
     * @var AmountType $BuyItNowPrice
     * @access public
     */
    public $BuyItNowPrice = null;

    /**
     * @var CharityType $Charity
     * @access public
     */
    public $Charity = null;

    /**
     * @var CountryCodeType $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var CrossPromotionsType $CrossPromotion
     * @access public
     */
    public $CrossPromotion = null;

    /**
     * @var CurrencyCodeType $Currency
     * @access public
     */
    public $Currency = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var EscrowCodeType $Escrow
     * @access public
     */
    public $Escrow = null;

    /**
     * @var int $GiftIcon
     * @access public
     */
    public $GiftIcon = null;

    /**
     * @var GiftServicesCodeType[] $GiftServices
     * @access public
     */
    public $GiftServices = null;

    /**
     * @var HitCounterCodeType $HitCounter
     * @access public
     */
    public $HitCounter = null;

    /**
     * @var ItemIDType $ItemID
     * @access public
     */
    public $ItemID = null;

    /**
     * @var ListingDetailsType $ListingDetails
     * @access public
     */
    public $ListingDetails = null;

    /**
     * @var ListingDesignerType $ListingDesigner
     * @access public
     */
    public $ListingDesigner = null;

    /**
     * @var ListingDurationCodeType $ListingDuration
     * @access public
     */
    public $ListingDuration = null;

    /**
     * @var ListingEnhancementsCodeType[] $ListingEnhancement
     * @access public
     */
    public $ListingEnhancement = null;

    /**
     * @var ListingTypeCodeType $ListingType
     * @access public
     */
    public $ListingType = null;

    /**
     * @var string $Location
     * @access public
     */
    public $Location = null;

    /**
     * @var string $PartnerCode
     * @access public
     */
    public $PartnerCode = null;

    /**
     * @var string $PartnerName
     * @access public
     */
    public $PartnerName = null;

    /**
     * @var BuyerPaymentMethodCodeType $PaymentMethods
     * @access public
     */
    public $PaymentMethods = null;

    /**
     * @var string $PayPalEmailAddress
     * @access public
     */
    public $PayPalEmailAddress = null;

    /**
     * @var CategoryType $PrimaryCategory
     * @access public
     */
    public $PrimaryCategory = null;

    /**
     * @var boolean $PrivateListing
     * @access public
     */
    public $PrivateListing = null;

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var string $RegionID
     * @access public
     */
    public $RegionID = null;

    /**
     * @var boolean $RelistLink
     * @access public
     */
    public $RelistLink = null;

    /**
     * @var AmountType $ReservePrice
     * @access public
     */
    public $ReservePrice = null;

    /**
     * @var ReviseStatusType $ReviseStatus
     * @access public
     */
    public $ReviseStatus = null;

    /**
     * @var dateTime $ScheduleTime
     * @access public
     */
    public $ScheduleTime = null;

    /**
     * @var CategoryType $SecondaryCategory
     * @access public
     */
    public $SecondaryCategory = null;

    /**
     * @var SiteHostedPictureType $SiteHostedPicture
     * @access public
     */
    public $SiteHostedPicture = null;

    /**
     * @var UserType $Seller
     * @access public
     */
    public $Seller = null;

    /**
     * @var SellingStatusType $SellingStatus
     * @access public
     */
    public $SellingStatus = null;

    /**
     * @var ShippingOptionCodeType $ShippingOption
     * @access public
     */
    public $ShippingOption = null;

    /**
     * @var ShippingDetailsType $ShippingDetails
     * @access public
     */
    public $ShippingDetails = null;

    /**
     * @var ShippingRegionCodeType $ShippingRegions
     * @access public
     */
    public $ShippingRegions = null;

    /**
     * @var ShippingTermsCodeType $ShippingTerms
     * @access public
     */
    public $ShippingTerms = null;

    /**
     * @var SiteCodeType $Site
     * @access public
     */
    public $Site = null;

    /**
     * @var AmountType $StartPrice
     * @access public
     */
    public $StartPrice = null;

    /**
     * @var StorefrontType $Storefront
     * @access public
     */
    public $Storefront = null;

    /**
     * @var string $SubTitle
     * @access public
     */
    public $SubTitle = null;

    /**
     * @var duration $TimeLeft
     * @access public
     */
    public $TimeLeft = null;

    /**
     * @var string $Title
     * @access public
     */
    public $Title = null;

    /**
     * @var UUIDType $UUID
     * @access public
     */
    public $UUID = null;

    /**
     * @var VATDetailsType $VATDetails
     * @access public
     */
    public $VATDetails = null;

    /**
     * @var VendorHostedPictureType $VendorHostedPicture
     * @access public
     */
    public $VendorHostedPicture = null;

    /**
     * @param string $ApplicationData
     * @param ListOfAttributeSetType $ListOfAttributeSets
     * @param boolean $AutoPay
     * @param BuyerProtectionCodeType $BuyerProtection
     * @param AmountType $BuyItNowPrice
     * @param CharityType $Charity
     * @param CountryCodeType $Country
     * @param CrossPromotionsType $CrossPromotion
     * @param CurrencyCodeType $Currency
     * @param string $Description
     * @param EscrowCodeType $Escrow
     * @param int $GiftIcon
     * @param GiftServicesCodeType[] $GiftServices
     * @param HitCounterCodeType $HitCounter
     * @param ItemIDType $ItemID
     * @param ListingDetailsType $ListingDetails
     * @param ListingDesignerType $ListingDesigner
     * @param ListingDurationCodeType $ListingDuration
     * @param ListingEnhancementsCodeType[] $ListingEnhancement
     * @param ListingTypeCodeType $ListingType
     * @param string $Location
     * @param string $PartnerCode
     * @param string $PartnerName
     * @param BuyerPaymentMethodCodeType $PaymentMethods
     * @param string $PayPalEmailAddress
     * @param CategoryType $PrimaryCategory
     * @param boolean $PrivateListing
     * @param int $Quantity
     * @param string $RegionID
     * @param boolean $RelistLink
     * @param AmountType $ReservePrice
     * @param ReviseStatusType $ReviseStatus
     * @param dateTime $ScheduleTime
     * @param CategoryType $SecondaryCategory
     * @param SiteHostedPictureType $SiteHostedPicture
     * @param UserType $Seller
     * @param SellingStatusType $SellingStatus
     * @param ShippingOptionCodeType $ShippingOption
     * @param ShippingDetailsType $ShippingDetails
     * @param ShippingRegionCodeType $ShippingRegions
     * @param ShippingTermsCodeType $ShippingTerms
     * @param SiteCodeType $Site
     * @param AmountType $StartPrice
     * @param StorefrontType $Storefront
     * @param string $SubTitle
     * @param duration $TimeLeft
     * @param string $Title
     * @param UUIDType $UUID
     * @param VATDetailsType $VATDetails
     * @param VendorHostedPictureType $VendorHostedPicture
     * @access public
     */
    public function __construct($ApplicationData, $ListOfAttributeSets, $AutoPay, $BuyerProtection, $BuyItNowPrice, $Charity, $Country, $CrossPromotion, $Currency, $Description, $Escrow, $GiftIcon, $GiftServices, $HitCounter, $ItemID, $ListingDetails, $ListingDesigner, $ListingDuration, $ListingEnhancement, $ListingType, $Location, $PartnerCode, $PartnerName, $PaymentMethods, $PayPalEmailAddress, $PrimaryCategory, $PrivateListing, $Quantity, $RegionID, $RelistLink, $ReservePrice, $ReviseStatus, $ScheduleTime, $SecondaryCategory, $SiteHostedPicture, $Seller, $SellingStatus, $ShippingOption, $ShippingDetails, $ShippingRegions, $ShippingTerms, $Site, $StartPrice, $Storefront, $SubTitle, $TimeLeft, $Title, $UUID, $VATDetails, $VendorHostedPicture)
    {
      $this->ApplicationData = $ApplicationData;
      $this->ListOfAttributeSets = $ListOfAttributeSets;
      $this->AutoPay = $AutoPay;
      $this->BuyerProtection = $BuyerProtection;
      $this->BuyItNowPrice = $BuyItNowPrice;
      $this->Charity = $Charity;
      $this->Country = $Country;
      $this->CrossPromotion = $CrossPromotion;
      $this->Currency = $Currency;
      $this->Description = $Description;
      $this->Escrow = $Escrow;
      $this->GiftIcon = $GiftIcon;
      $this->GiftServices = $GiftServices;
      $this->HitCounter = $HitCounter;
      $this->ItemID = $ItemID;
      $this->ListingDetails = $ListingDetails;
      $this->ListingDesigner = $ListingDesigner;
      $this->ListingDuration = $ListingDuration;
      $this->ListingEnhancement = $ListingEnhancement;
      $this->ListingType = $ListingType;
      $this->Location = $Location;
      $this->PartnerCode = $PartnerCode;
      $this->PartnerName = $PartnerName;
      $this->PaymentMethods = $PaymentMethods;
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      $this->PrimaryCategory = $PrimaryCategory;
      $this->PrivateListing = $PrivateListing;
      $this->Quantity = $Quantity;
      $this->RegionID = $RegionID;
      $this->RelistLink = $RelistLink;
      $this->ReservePrice = $ReservePrice;
      $this->ReviseStatus = $ReviseStatus;
      $this->ScheduleTime = $ScheduleTime;
      $this->SecondaryCategory = $SecondaryCategory;
      $this->SiteHostedPicture = $SiteHostedPicture;
      $this->Seller = $Seller;
      $this->SellingStatus = $SellingStatus;
      $this->ShippingOption = $ShippingOption;
      $this->ShippingDetails = $ShippingDetails;
      $this->ShippingRegions = $ShippingRegions;
      $this->ShippingTerms = $ShippingTerms;
      $this->Site = $Site;
      $this->StartPrice = $StartPrice;
      $this->Storefront = $Storefront;
      $this->SubTitle = $SubTitle;
      $this->TimeLeft = $TimeLeft;
      $this->Title = $Title;
      $this->UUID = $UUID;
      $this->VATDetails = $VATDetails;
      $this->VendorHostedPicture = $VendorHostedPicture;
    }

}
