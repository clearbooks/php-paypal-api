<?php

namespace Paypal\Api;

class DoExpressCheckoutPaymentResponseDetailsType
{

    /**
     * @var ExpressCheckoutTokenType $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

    /**
     * @var string $BillingAgreementID
     * @access public
     */
    public $BillingAgreementID = null;

    /**
     * @var string $RedirectRequired
     * @access public
     */
    public $RedirectRequired = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @var string $SuccessPageRedirectRequested
     * @access public
     */
    public $SuccessPageRedirectRequested = null;

    /**
     * @var UserSelectedOptionType $UserSelectedOptions
     * @access public
     */
    public $UserSelectedOptions = null;

    /**
     * @var CoupledPaymentInfoType $CoupledPaymentInfo
     * @access public
     */
    public $CoupledPaymentInfo = null;

    /**
     * @param ExpressCheckoutTokenType $Token
     * @param PaymentInfoType $PaymentInfo
     * @param string $BillingAgreementID
     * @param string $RedirectRequired
     * @param string $Note
     * @param string $MsgSubID
     * @param string $SuccessPageRedirectRequested
     * @param UserSelectedOptionType $UserSelectedOptions
     * @param CoupledPaymentInfoType $CoupledPaymentInfo
     * @access public
     */
    public function __construct($Token, $PaymentInfo, $BillingAgreementID, $RedirectRequired, $Note, $MsgSubID, $SuccessPageRedirectRequested, $UserSelectedOptions, $CoupledPaymentInfo)
    {
      $this->Token = $Token;
      $this->PaymentInfo = $PaymentInfo;
      $this->BillingAgreementID = $BillingAgreementID;
      $this->RedirectRequired = $RedirectRequired;
      $this->Note = $Note;
      $this->MsgSubID = $MsgSubID;
      $this->SuccessPageRedirectRequested = $SuccessPageRedirectRequested;
      $this->UserSelectedOptions = $UserSelectedOptions;
      $this->CoupledPaymentInfo = $CoupledPaymentInfo;
    }

}
