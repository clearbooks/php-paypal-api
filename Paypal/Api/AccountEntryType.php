<?php

namespace Paypal\Api;

class AccountEntryType
{

    /**
     * @var AmountType $Balance
     * @access public
     */
    public $Balance = null;

    /**
     * @var AmountType $Credit
     * @access public
     */
    public $Credit = null;

    /**
     * @var dateTime $Date
     * @access public
     */
    public $Date = null;

    /**
     * @var AmountType $Debit
     * @access public
     */
    public $Debit = null;

    /**
     * @var ItemIDType $ItemID
     * @access public
     */
    public $ItemID = null;

    /**
     * @var string $Memo
     * @access public
     */
    public $Memo = null;

    /**
     * @var int $RefNumber
     * @access public
     */
    public $RefNumber = null;

    /**
     * @var int $AccountEntryDetailsType
     * @access public
     */
    public $AccountEntryDetailsType = null;

    /**
     * @param AmountType $Balance
     * @param AmountType $Credit
     * @param dateTime $Date
     * @param AmountType $Debit
     * @param ItemIDType $ItemID
     * @param string $Memo
     * @param int $RefNumber
     * @param int $AccountEntryDetailsType
     * @access public
     */
    public function __construct($Balance, $Credit, $Date, $Debit, $ItemID, $Memo, $RefNumber, $AccountEntryDetailsType)
    {
      $this->Balance = $Balance;
      $this->Credit = $Credit;
      $this->Date = $Date;
      $this->Debit = $Debit;
      $this->ItemID = $ItemID;
      $this->Memo = $Memo;
      $this->RefNumber = $RefNumber;
      $this->AccountEntryDetailsType = $AccountEntryDetailsType;
    }

}
