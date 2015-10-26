<?php

namespace Paypal\Api;

class DiscountInfoType
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
     * @var string $RedeemedOfferId
     * @access public
     */
    public $RedeemedOfferId = null;

    /**
     * @var float $PointsAccrued
     * @access public
     */
    public $PointsAccrued = null;

    /**
     * @param string $Name
     * @param string $Description
     * @param BasicAmountType $Amount
     * @param RedeemedOfferType $RedeemedOfferType
     * @param string $RedeemedOfferId
     * @param float $PointsAccrued
     * @access public
     */
    public function __construct($Name, $Description, $Amount, $RedeemedOfferType, $RedeemedOfferId, $PointsAccrued)
    {
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Amount = $Amount;
      $this->RedeemedOfferType = $RedeemedOfferType;
      $this->RedeemedOfferId = $RedeemedOfferId;
      $this->PointsAccrued = $PointsAccrued;
    }

}
