<?php

namespace Paypal\Api;

class DiscountType
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
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var RedeemedOfferType $RedeemedOfferType
     * @access public
     */
    public $RedeemedOfferType = null;

    /**
     * @var string $RedeemedOfferID
     * @access public
     */
    public $RedeemedOfferID = null;

    /**
     * @param string $Name
     * @param string $Description
     * @param BasicAmountType $Amount
     * @param RedeemedOfferType $RedeemedOfferType
     * @param string $RedeemedOfferID
     * @access public
     */
    public function __construct($Name, $Description, $Amount, $RedeemedOfferType, $RedeemedOfferID)
    {
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Amount = $Amount;
      $this->RedeemedOfferType = $RedeemedOfferType;
      $this->RedeemedOfferID = $RedeemedOfferID;
    }

}
