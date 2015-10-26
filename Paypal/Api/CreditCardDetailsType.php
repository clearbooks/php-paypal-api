<?php

namespace Paypal\Api;

class CreditCardDetailsType
{

    /**
     * @var CreditCardTypeType $CreditCardType
     * @access public
     */
    public $CreditCardType = null;

    /**
     * @var string $CreditCardNumber
     * @access public
     */
    public $CreditCardNumber = null;

    /**
     * @var int $ExpMonth
     * @access public
     */
    public $ExpMonth = null;

    /**
     * @var int $ExpYear
     * @access public
     */
    public $ExpYear = null;

    /**
     * @var PayerInfoType $CardOwner
     * @access public
     */
    public $CardOwner = null;

    /**
     * @var string $CVV2
     * @access public
     */
    public $CVV2 = null;

    /**
     * @var int $StartMonth
     * @access public
     */
    public $StartMonth = null;

    /**
     * @var int $StartYear
     * @access public
     */
    public $StartYear = null;

    /**
     * @var string $IssueNumber
     * @access public
     */
    public $IssueNumber = null;

    /**
     * @var ThreeDSecureRequestType $ThreeDSecureRequest
     * @access public
     */
    public $ThreeDSecureRequest = null;

    /**
     * @param CreditCardTypeType $CreditCardType
     * @param string $CreditCardNumber
     * @param int $ExpMonth
     * @param int $ExpYear
     * @param PayerInfoType $CardOwner
     * @param string $CVV2
     * @param int $StartMonth
     * @param int $StartYear
     * @param string $IssueNumber
     * @param ThreeDSecureRequestType $ThreeDSecureRequest
     * @access public
     */
    public function __construct($CreditCardType, $CreditCardNumber, $ExpMonth, $ExpYear, $CardOwner, $CVV2, $StartMonth, $StartYear, $IssueNumber, $ThreeDSecureRequest)
    {
      $this->CreditCardType = $CreditCardType;
      $this->CreditCardNumber = $CreditCardNumber;
      $this->ExpMonth = $ExpMonth;
      $this->ExpYear = $ExpYear;
      $this->CardOwner = $CardOwner;
      $this->CVV2 = $CVV2;
      $this->StartMonth = $StartMonth;
      $this->StartYear = $StartYear;
      $this->IssueNumber = $IssueNumber;
      $this->ThreeDSecureRequest = $ThreeDSecureRequest;
    }

}
