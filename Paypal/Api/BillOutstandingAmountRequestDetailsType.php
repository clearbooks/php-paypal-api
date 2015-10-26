<?php

namespace Paypal\Api;

class BillOutstandingAmountRequestDetailsType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @param string $ProfileID
     * @param BasicAmountType $Amount
     * @param string $Note
     * @access public
     */
    public function __construct($ProfileID, $Amount, $Note)
    {
      $this->ProfileID = $ProfileID;
      $this->Amount = $Amount;
      $this->Note = $Note;
    }

}
