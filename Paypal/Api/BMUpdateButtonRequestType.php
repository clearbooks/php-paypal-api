<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class BMUpdateButtonRequestType extends AbstractRequestType
{

    /**
     * @var string $HostedButtonID
     * @access public
     */
    public $HostedButtonID = null;

    /**
     * @var ButtonTypeType $ButtonType
     * @access public
     */
    public $ButtonType = null;

    /**
     * @var ButtonCodeType $ButtonCode
     * @access public
     */
    public $ButtonCode = null;

    /**
     * @var ButtonSubTypeType $ButtonSubType
     * @access public
     */
    public $ButtonSubType = null;

    /**
     * @var string $ButtonVar
     * @access public
     */
    public $ButtonVar = null;

    /**
     * @var OptionDetailsType $OptionDetails
     * @access public
     */
    public $OptionDetails = null;

    /**
     * @var string $TextBox
     * @access public
     */
    public $TextBox = null;

    /**
     * @var ButtonImageType $ButtonImage
     * @access public
     */
    public $ButtonImage = null;

    /**
     * @var string $ButtonImageURL
     * @access public
     */
    public $ButtonImageURL = null;

    /**
     * @var BuyNowTextType $BuyNowText
     * @access public
     */
    public $BuyNowText = null;

    /**
     * @var SubscribeTextType $SubscribeText
     * @access public
     */
    public $SubscribeText = null;

    /**
     * @var CountryCodeType $ButtonCountry
     * @access public
     */
    public $ButtonCountry = null;

    /**
     * @var string $ButtonLanguage
     * @access public
     */
    public $ButtonLanguage = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $HostedButtonID
     * @param ButtonTypeType $ButtonType
     * @param ButtonCodeType $ButtonCode
     * @param ButtonSubTypeType $ButtonSubType
     * @param string $ButtonVar
     * @param OptionDetailsType $OptionDetails
     * @param string $TextBox
     * @param ButtonImageType $ButtonImage
     * @param string $ButtonImageURL
     * @param BuyNowTextType $BuyNowText
     * @param SubscribeTextType $SubscribeText
     * @param CountryCodeType $ButtonCountry
     * @param string $ButtonLanguage
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $HostedButtonID, $ButtonType, $ButtonCode, $ButtonSubType, $ButtonVar, $OptionDetails, $TextBox, $ButtonImage, $ButtonImageURL, $BuyNowText, $SubscribeText, $ButtonCountry, $ButtonLanguage)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->HostedButtonID = $HostedButtonID;
      $this->ButtonType = $ButtonType;
      $this->ButtonCode = $ButtonCode;
      $this->ButtonSubType = $ButtonSubType;
      $this->ButtonVar = $ButtonVar;
      $this->OptionDetails = $OptionDetails;
      $this->TextBox = $TextBox;
      $this->ButtonImage = $ButtonImage;
      $this->ButtonImageURL = $ButtonImageURL;
      $this->BuyNowText = $BuyNowText;
      $this->SubscribeText = $SubscribeText;
      $this->ButtonCountry = $ButtonCountry;
      $this->ButtonLanguage = $ButtonLanguage;
    }

}
