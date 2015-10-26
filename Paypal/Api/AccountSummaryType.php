<?php

namespace Paypal\Api;

class AccountSummaryType
{

    /**
     * @var AccountStateCodeType $AccountState
     * @access public
     */
    public $AccountState = null;

    /**
     * @var AdditionalAccountType[] $AdditionalAccount
     * @access public
     */
    public $AdditionalAccount = null;

    /**
     * @var int $AdditionalAccountsCount
     * @access public
     */
    public $AdditionalAccountsCount = null;

    /**
     * @var AmountType $AmountPastDue
     * @access public
     */
    public $AmountPastDue = null;

    /**
     * @var string $BankAccountInfo
     * @access public
     */
    public $BankAccountInfo = null;

    /**
     * @var dateTime $BankModifyDate
     * @access public
     */
    public $BankModifyDate = null;

    /**
     * @var dateTime $BillingCycleDate
     * @access public
     */
    public $BillingCycleDate = null;

    /**
     * @var dateTime $CCExp
     * @access public
     */
    public $CCExp = null;

    /**
     * @var string $CCInfo
     * @access public
     */
    public $CCInfo = null;

    /**
     * @var dateTime $CCModifyDate
     * @access public
     */
    public $CCModifyDate = null;

    /**
     * @var AmountType $CurrentBalance
     * @access public
     */
    public $CurrentBalance = null;

    /**
     * @var AmountType $LastAmountPaid
     * @access public
     */
    public $LastAmountPaid = null;

    /**
     * @var AmountType $LastInvoiceAmount
     * @access public
     */
    public $LastInvoiceAmount = null;

    /**
     * @var dateTime $LastInvoiceDate
     * @access public
     */
    public $LastInvoiceDate = null;

    /**
     * @var dateTime $LastPaymentDate
     * @access public
     */
    public $LastPaymentDate = null;

    /**
     * @var boolean $PastDue
     * @access public
     */
    public $PastDue = null;

    /**
     * @var SellerPaymentMethodCodeType $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @param AccountStateCodeType $AccountState
     * @param AdditionalAccountType[] $AdditionalAccount
     * @param int $AdditionalAccountsCount
     * @param AmountType $AmountPastDue
     * @param string $BankAccountInfo
     * @param dateTime $BankModifyDate
     * @param dateTime $BillingCycleDate
     * @param dateTime $CCExp
     * @param string $CCInfo
     * @param dateTime $CCModifyDate
     * @param AmountType $CurrentBalance
     * @param AmountType $LastAmountPaid
     * @param AmountType $LastInvoiceAmount
     * @param dateTime $LastInvoiceDate
     * @param dateTime $LastPaymentDate
     * @param boolean $PastDue
     * @param SellerPaymentMethodCodeType $PaymentMethod
     * @access public
     */
    public function __construct($AccountState, $AdditionalAccount, $AdditionalAccountsCount, $AmountPastDue, $BankAccountInfo, $BankModifyDate, $BillingCycleDate, $CCExp, $CCInfo, $CCModifyDate, $CurrentBalance, $LastAmountPaid, $LastInvoiceAmount, $LastInvoiceDate, $LastPaymentDate, $PastDue, $PaymentMethod)
    {
      $this->AccountState = $AccountState;
      $this->AdditionalAccount = $AdditionalAccount;
      $this->AdditionalAccountsCount = $AdditionalAccountsCount;
      $this->AmountPastDue = $AmountPastDue;
      $this->BankAccountInfo = $BankAccountInfo;
      $this->BankModifyDate = $BankModifyDate;
      $this->BillingCycleDate = $BillingCycleDate;
      $this->CCExp = $CCExp;
      $this->CCInfo = $CCInfo;
      $this->CCModifyDate = $CCModifyDate;
      $this->CurrentBalance = $CurrentBalance;
      $this->LastAmountPaid = $LastAmountPaid;
      $this->LastInvoiceAmount = $LastInvoiceAmount;
      $this->LastInvoiceDate = $LastInvoiceDate;
      $this->LastPaymentDate = $LastPaymentDate;
      $this->PastDue = $PastDue;
      $this->PaymentMethod = $PaymentMethod;
    }

}
