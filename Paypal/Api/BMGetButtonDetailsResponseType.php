<?php

namespace Paypal\Api;

include_once('AbstractResponseType.php');

class BMGetButtonDetailsResponseType extends AbstractResponseType
{

    /**
     * @var string $Website
     * @access public
     */
    public $Website = null;

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var string $Mobile
     * @access public
     */
    public $Mobile = null;

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
     * @param dateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Version
     * @param string $Build
     * @param string $any
     * @param string $Website
     * @param string $Email
     * @param string $Mobile
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
    public function __construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any, $Website, $Email, $Mobile, $HostedButtonID, $ButtonType, $ButtonCode, $ButtonSubType, $ButtonVar, $OptionDetails, $TextBox, $ButtonImage, $ButtonImageURL, $BuyNowText, $SubscribeText, $ButtonCountry, $ButtonLanguage)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Version, $Build, $any);
      $this->Website = $Website;
      $this->Email = $Email;
      $this->Mobile = $Mobile;
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
