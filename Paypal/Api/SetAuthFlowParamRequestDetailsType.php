<?php

namespace Paypal\Api;

class SetAuthFlowParamRequestDetailsType
{

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
     * @var string $LogoutURL
     * @access public
     */
    public $LogoutURL = null;

    /**
     * @var string $InitFlowType
     * @access public
     */
    public $InitFlowType = null;

    /**
     * @var string $SkipLoginPage
     * @access public
     */
    public $SkipLoginPage = null;

    /**
     * @var string $ServiceName1
     * @access public
     */
    public $ServiceName1 = null;

    /**
     * @var string $ServiceDefReq1
     * @access public
     */
    public $ServiceDefReq1 = null;

    /**
     * @var string $ServiceName2
     * @access public
     */
    public $ServiceName2 = null;

    /**
     * @var string $ServiceDefReq2
     * @access public
     */
    public $ServiceDefReq2 = null;

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
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var AddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @param string $ReturnURL
     * @param string $CancelURL
     * @param string $LogoutURL
     * @param string $InitFlowType
     * @param string $SkipLoginPage
     * @param string $ServiceName1
     * @param string $ServiceDefReq1
     * @param string $ServiceName2
     * @param string $ServiceDefReq2
     * @param string $LocaleCode
     * @param string $PageStyle
     * @param string $cppheaderimage
     * @param string $cppheaderbordercolor
     * @param string $cppheaderbackcolor
     * @param string $cpppayflowcolor
     * @param string $FirstName
     * @param string $LastName
     * @param AddressType $Address
     * @access public
     */
    public function __construct($ReturnURL, $CancelURL, $LogoutURL, $InitFlowType, $SkipLoginPage, $ServiceName1, $ServiceDefReq1, $ServiceName2, $ServiceDefReq2, $LocaleCode, $PageStyle, $cppheaderimage, $cppheaderbordercolor, $cppheaderbackcolor, $cpppayflowcolor, $FirstName, $LastName, $Address)
    {
      $this->ReturnURL = $ReturnURL;
      $this->CancelURL = $CancelURL;
      $this->LogoutURL = $LogoutURL;
      $this->InitFlowType = $InitFlowType;
      $this->SkipLoginPage = $SkipLoginPage;
      $this->ServiceName1 = $ServiceName1;
      $this->ServiceDefReq1 = $ServiceDefReq1;
      $this->ServiceName2 = $ServiceName2;
      $this->ServiceDefReq2 = $ServiceDefReq2;
      $this->LocaleCode = $LocaleCode;
      $this->PageStyle = $PageStyle;
      $this->cppheaderimage = $cppheaderimage;
      $this->cppheaderbordercolor = $cppheaderbordercolor;
      $this->cppheaderbackcolor = $cppheaderbackcolor;
      $this->cpppayflowcolor = $cpppayflowcolor;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Address = $Address;
    }

}
