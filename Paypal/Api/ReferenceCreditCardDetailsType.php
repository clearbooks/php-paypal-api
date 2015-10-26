<?php

namespace Paypal\Api;

class ReferenceCreditCardDetailsType
{

    /**
     * @var CreditCardNumberTypeType $CreditCardNumberType
     * @access public
     */
    public $CreditCardNumberType = null;

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
     * @var PersonNameType $CardOwnerName
     * @access public
     */
    public $CardOwnerName = null;

    /**
     * @var AddressType $BillingAddress
     * @access public
     */
    public $BillingAddress = null;

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
     * @param CreditCardNumberTypeType $CreditCardNumberType
     * @param int $ExpMonth
     * @param int $ExpYear
     * @param PersonNameType $CardOwnerName
     * @param AddressType $BillingAddress
     * @param string $CVV2
     * @param int $StartMonth
     * @param int $StartYear
     * @param string $IssueNumber
     * @access public
     */
    public function __construct($CreditCardNumberType, $ExpMonth, $ExpYear, $CardOwnerName, $BillingAddress, $CVV2, $StartMonth, $StartYear, $IssueNumber)
    {
      $this->CreditCardNumberType = $CreditCardNumberType;
      $this->ExpMonth = $ExpMonth;
      $this->ExpYear = $ExpYear;
      $this->CardOwnerName = $CardOwnerName;
      $this->BillingAddress = $BillingAddress;
      $this->CVV2 = $CVV2;
      $this->StartMonth = $StartMonth;
      $this->StartYear = $StartYear;
      $this->IssueNumber = $IssueNumber;
    }

}
