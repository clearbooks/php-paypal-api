<?php

namespace Paypal\Api;

class GetBoardingDetailsResponseDetailsType
{

    /**
     * @var BoardingStatusType $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var dateTime $StartDate
     * @access public
     */
    public $StartDate = null;

    /**
     * @var dateTime $LastUpdated
     * @access public
     */
    public $LastUpdated = null;

    /**
     * @var string $Reason
     * @access public
     */
    public $Reason = null;

    /**
     * @var string $ProgramName
     * @access public
     */
    public $ProgramName = null;

    /**
     * @var string $ProgramCode
     * @access public
     */
    public $ProgramCode = null;

    /**
     * @var string $CampaignID
     * @access public
     */
    public $CampaignID = null;

    /**
     * @var UserWithdrawalLimitTypeType $UserWithdrawalLimit
     * @access public
     */
    public $UserWithdrawalLimit = null;

    /**
     * @var string $PartnerCustom
     * @access public
     */
    public $PartnerCustom = null;

    /**
     * @var PayerInfoType $AccountOwner
     * @access public
     */
    public $AccountOwner = null;

    /**
     * @var APICredentialsType $Credentials
     * @access public
     */
    public $Credentials = null;

    /**
     * @var string $ConfigureAPIs
     * @access public
     */
    public $ConfigureAPIs = null;

    /**
     * @var string $EmailVerificationStatus
     * @access public
     */
    public $EmailVerificationStatus = null;

    /**
     * @var string $VettingStatus
     * @access public
     */
    public $VettingStatus = null;

    /**
     * @var string $BankAccountVerificationStatus
     * @access public
     */
    public $BankAccountVerificationStatus = null;

    /**
     * @param BoardingStatusType $Status
     * @param dateTime $StartDate
     * @param dateTime $LastUpdated
     * @param string $Reason
     * @param string $ProgramName
     * @param string $ProgramCode
     * @param string $CampaignID
     * @param UserWithdrawalLimitTypeType $UserWithdrawalLimit
     * @param string $PartnerCustom
     * @param PayerInfoType $AccountOwner
     * @param APICredentialsType $Credentials
     * @param string $ConfigureAPIs
     * @param string $EmailVerificationStatus
     * @param string $VettingStatus
     * @param string $BankAccountVerificationStatus
     * @access public
     */
    public function __construct($Status, $StartDate, $LastUpdated, $Reason, $ProgramName, $ProgramCode, $CampaignID, $UserWithdrawalLimit, $PartnerCustom, $AccountOwner, $Credentials, $ConfigureAPIs, $EmailVerificationStatus, $VettingStatus, $BankAccountVerificationStatus)
    {
      $this->Status = $Status;
      $this->StartDate = $StartDate;
      $this->LastUpdated = $LastUpdated;
      $this->Reason = $Reason;
      $this->ProgramName = $ProgramName;
      $this->ProgramCode = $ProgramCode;
      $this->CampaignID = $CampaignID;
      $this->UserWithdrawalLimit = $UserWithdrawalLimit;
      $this->PartnerCustom = $PartnerCustom;
      $this->AccountOwner = $AccountOwner;
      $this->Credentials = $Credentials;
      $this->ConfigureAPIs = $ConfigureAPIs;
      $this->EmailVerificationStatus = $EmailVerificationStatus;
      $this->VettingStatus = $VettingStatus;
      $this->BankAccountVerificationStatus = $BankAccountVerificationStatus;
    }

}
