<?php

namespace Paypal\Api;

class UserType
{

    /**
     * @var boolean $AboutMePage
     * @access public
     */
    public $AboutMePage = null;

    /**
     * @var string $EAISToken
     * @access public
     */
    public $EAISToken = null;

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var int $FeedbackScore
     * @access public
     */
    public $FeedbackScore = null;

    /**
     * @var boolean $FeedbackPrivate
     * @access public
     */
    public $FeedbackPrivate = null;

    /**
     * @var FeedbackRatingStarCodeType $FeedbackRatingStar
     * @access public
     */
    public $FeedbackRatingStar = null;

    /**
     * @var boolean $IDVerified
     * @access public
     */
    public $IDVerified = null;

    /**
     * @var boolean $NewUser
     * @access public
     */
    public $NewUser = null;

    /**
     * @var AddressType $RegistrationAddress
     * @access public
     */
    public $RegistrationAddress = null;

    /**
     * @var dateTime $RegistrationDate
     * @access public
     */
    public $RegistrationDate = null;

    /**
     * @var SiteCodeType $Site
     * @access public
     */
    public $Site = null;

    /**
     * @var UserStatusCodeType $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var UserIDType $UserID
     * @access public
     */
    public $UserID = null;

    /**
     * @var boolean $UserIDChanged
     * @access public
     */
    public $UserIDChanged = null;

    /**
     * @var dateTime $UserIDLastChanged
     * @access public
     */
    public $UserIDLastChanged = null;

    /**
     * @var VATStatusCodeType $VATStatus
     * @access public
     */
    public $VATStatus = null;

    /**
     * @var BuyerType $BuyerInfo
     * @access public
     */
    public $BuyerInfo = null;

    /**
     * @var SellerType $SellerInfo
     * @access public
     */
    public $SellerInfo = null;

    /**
     * @param boolean $AboutMePage
     * @param string $EAISToken
     * @param string $Email
     * @param int $FeedbackScore
     * @param boolean $FeedbackPrivate
     * @param FeedbackRatingStarCodeType $FeedbackRatingStar
     * @param boolean $IDVerified
     * @param boolean $NewUser
     * @param AddressType $RegistrationAddress
     * @param dateTime $RegistrationDate
     * @param SiteCodeType $Site
     * @param UserStatusCodeType $Status
     * @param UserIDType $UserID
     * @param boolean $UserIDChanged
     * @param dateTime $UserIDLastChanged
     * @param VATStatusCodeType $VATStatus
     * @param BuyerType $BuyerInfo
     * @param SellerType $SellerInfo
     * @access public
     */
    public function __construct($AboutMePage, $EAISToken, $Email, $FeedbackScore, $FeedbackPrivate, $FeedbackRatingStar, $IDVerified, $NewUser, $RegistrationAddress, $RegistrationDate, $Site, $Status, $UserID, $UserIDChanged, $UserIDLastChanged, $VATStatus, $BuyerInfo, $SellerInfo)
    {
      $this->AboutMePage = $AboutMePage;
      $this->EAISToken = $EAISToken;
      $this->Email = $Email;
      $this->FeedbackScore = $FeedbackScore;
      $this->FeedbackPrivate = $FeedbackPrivate;
      $this->FeedbackRatingStar = $FeedbackRatingStar;
      $this->IDVerified = $IDVerified;
      $this->NewUser = $NewUser;
      $this->RegistrationAddress = $RegistrationAddress;
      $this->RegistrationDate = $RegistrationDate;
      $this->Site = $Site;
      $this->Status = $Status;
      $this->UserID = $UserID;
      $this->UserIDChanged = $UserIDChanged;
      $this->UserIDLastChanged = $UserIDLastChanged;
      $this->VATStatus = $VATStatus;
      $this->BuyerInfo = $BuyerInfo;
      $this->SellerInfo = $SellerInfo;
    }

}
