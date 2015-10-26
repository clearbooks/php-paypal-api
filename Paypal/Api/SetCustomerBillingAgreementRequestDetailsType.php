<?php

namespace Paypal\Api;

class SetCustomerBillingAgreementRequestDetailsType
{

    /**
     * @var BillingAgreementDetailsType $BillingAgreementDetails
     * @access public
     */
    public $BillingAgreementDetails = null;

    /**
     * @var string $ReturnURL
     * @access public
     */
    public $ReturnURL = null;

    /**
     * @var string $CancelURL
     * @access public
     */
    public $CancelURL = null;

    /**
     * @var string $LocaleCode
     * @access public
     */
    public $LocaleCode = null;

    /**
     * @var string $PageStyle
     * @access public
     */
    public $PageStyle = null;

    /**
     * @var string $cppheaderimage
     * @access public
     */
    public $cppheaderimage = null;

    /**
     * @var string $cppheaderbordercolor
     * @access public
     */
    public $cppheaderbordercolor = null;

    /**
     * @var string $cppheaderbackcolor
     * @access public
     */
    public $cppheaderbackcolor = null;

    /**
     * @var string $cpppayflowcolor
     * @access public
     */
    public $cpppayflowcolor = null;

    /**
     * @var EmailAddressType $BuyerEmail
     * @access public
     */
    public $BuyerEmail = null;

    /**
     * @var string $ReqBillingAddress
     * @access public
     */
    public $ReqBillingAddress = null;

    /**
     * @param BillingAgreementDetailsType $BillingAgreementDetails
     * @param string $ReturnURL
     * @param string $CancelURL
     * @param string $LocaleCode
     * @param string $PageStyle
     * @param string $cppheaderimage
     * @param string $cppheaderbordercolor
     * @param string $cppheaderbackcolor
     * @param string $cpppayflowcolor
     * @param EmailAddressType $BuyerEmail
     * @param string $ReqBillingAddress
     * @access public
     */
    public function __construct($BillingAgreementDetails, $ReturnURL, $CancelURL, $LocaleCode, $PageStyle, $cppheaderimage, $cppheaderbordercolor, $cppheaderbackcolor, $cpppayflowcolor, $BuyerEmail, $ReqBillingAddress)
    {
      $this->BillingAgreementDetails = $BillingAgreementDetails;
      $this->ReturnURL = $ReturnURL;
      $this->CancelURL = $CancelURL;
      $this->LocaleCode = $LocaleCode;
      $this->PageStyle = $PageStyle;
      $this->cppheaderimage = $cppheaderimage;
      $this->cppheaderbordercolor = $cppheaderbordercolor;
      $this->cppheaderbackcolor = $cppheaderbackcolor;
      $this->cpppayflowcolor = $cpppayflowcolor;
      $this->BuyerEmail = $BuyerEmail;
      $this->ReqBillingAddress = $ReqBillingAddress;
    }

}
