<?php

namespace Paypal\Api;

class DoNonReferencedCreditRequestDetailsType
{

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var BasicAmountType $NetAmount
     * @access public
     */
    public $NetAmount = null;

    /**
     * @var BasicAmountType $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @var BasicAmountType $ShippingAmount
     * @access public
     */
    public $ShippingAmount = null;

    /**
     * @var CreditCardDetailsType $CreditCard
     * @access public
     */
    public $CreditCard = null;

    /**
     * @var string $ReceiverEmail
     * @access public
     */
    public $ReceiverEmail = null;

    /**
     * @var string $Comment
     * @access public
     */
    public $Comment = null;

    /**
     * @param BasicAmountType $Amount
     * @param BasicAmountType $NetAmount
     * @param BasicAmountType $TaxAmount
     * @param BasicAmountType $ShippingAmount
     * @param CreditCardDetailsType $CreditCard
     * @param string $ReceiverEmail
     * @param string $Comment
     * @access public
     */
    public function __construct($Amount, $NetAmount, $TaxAmount, $ShippingAmount, $CreditCard, $ReceiverEmail, $Comment)
    {
      $this->Amount = $Amount;
      $this->NetAmount = $NetAmount;
      $this->TaxAmount = $TaxAmount;
      $this->ShippingAmount = $ShippingAmount;
      $this->CreditCard = $CreditCard;
      $this->ReceiverEmail = $ReceiverEmail;
      $this->Comment = $Comment;
    }

}
