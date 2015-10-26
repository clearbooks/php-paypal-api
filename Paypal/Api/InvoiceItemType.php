<?php

namespace Paypal\Api;

class InvoiceItemType
{

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $EAN
     * @access public
     */
    public $EAN = null;

    /**
     * @var string $SKU
     * @access public
     */
    public $SKU = null;

    /**
     * @var string $ReturnPolicyIdentifier
     * @access public
     */
    public $ReturnPolicyIdentifier = null;

    /**
     * @var BasicAmountType $Price
     * @access public
     */
    public $Price = null;

    /**
     * @var BasicAmountType $ItemPrice
     * @access public
     */
    public $ItemPrice = null;

    /**
     * @var float $ItemCount
     * @access public
     */
    public $ItemCount = null;

    /**
     * @var UnitOfMeasure $ItemCountUnit
     * @access public
     */
    public $ItemCountUnit = null;

    /**
     * @var DiscountType[] $Discount
     * @access public
     */
    public $Discount = null;

    /**
     * @var boolean $Taxable
     * @access public
     */
    public $Taxable = null;

    /**
     * @var float $TaxRate
     * @access public
     */
    public $TaxRate = null;

    /**
     * @var AdditionalFeeType[] $AdditionalFees
     * @access public
     */
    public $AdditionalFees = null;

    /**
     * @var boolean $Reimbursable
     * @access public
     */
    public $Reimbursable = null;

    /**
     * @var string $MPN
     * @access public
     */
    public $MPN = null;

    /**
     * @var string $ISBN
     * @access public
     */
    public $ISBN = null;

    /**
     * @var string $PLU
     * @access public
     */
    public $PLU = null;

    /**
     * @var string $ModelNumber
     * @access public
     */
    public $ModelNumber = null;

    /**
     * @var string $StyleNumber
     * @access public
     */
    public $StyleNumber = null;

    /**
     * @param string $Name
     * @param string $Description
     * @param string $EAN
     * @param string $SKU
     * @param string $ReturnPolicyIdentifier
     * @param BasicAmountType $Price
     * @param BasicAmountType $ItemPrice
     * @param float $ItemCount
     * @param UnitOfMeasure $ItemCountUnit
     * @param DiscountType[] $Discount
     * @param boolean $Taxable
     * @param float $TaxRate
     * @param AdditionalFeeType[] $AdditionalFees
     * @param boolean $Reimbursable
     * @param string $MPN
     * @param string $ISBN
     * @param string $PLU
     * @param string $ModelNumber
     * @param string $StyleNumber
     * @access public
     */
    public function __construct($Name, $Description, $EAN, $SKU, $ReturnPolicyIdentifier, $Price, $ItemPrice, $ItemCount, $ItemCountUnit, $Discount, $Taxable, $TaxRate, $AdditionalFees, $Reimbursable, $MPN, $ISBN, $PLU, $ModelNumber, $StyleNumber)
    {
      $this->Name = $Name;
      $this->Description = $Description;
      $this->EAN = $EAN;
      $this->SKU = $SKU;
      $this->ReturnPolicyIdentifier = $ReturnPolicyIdentifier;
      $this->Price = $Price;
      $this->ItemPrice = $ItemPrice;
      $this->ItemCount = $ItemCount;
      $this->ItemCountUnit = $ItemCountUnit;
      $this->Discount = $Discount;
      $this->Taxable = $Taxable;
      $this->TaxRate = $TaxRate;
      $this->AdditionalFees = $AdditionalFees;
      $this->Reimbursable = $Reimbursable;
      $this->MPN = $MPN;
      $this->ISBN = $ISBN;
      $this->PLU = $PLU;
      $this->ModelNumber = $ModelNumber;
      $this->StyleNumber = $StyleNumber;
    }

}
