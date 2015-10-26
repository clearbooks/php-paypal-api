<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoAuthorizationRequestType extends AbstractRequestType
{

    /**
     * @var string $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var TransactionEntityType $TransactionEntity
     * @access public
     */
    public $TransactionEntity = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var AddressType $ShipToAddress
     * @access public
     */
    public $ShipToAddress = null;

    /**
     * @var PaymentDetailsItemType $PaymentDetailsItem
     * @access public
     */
    public $PaymentDetailsItem = null;

    /**
     * @var BasicAmountType $ItemTotal
     * @access public
     */
    public $ItemTotal = null;

    /**
     * @var BasicAmountType $ShippingTotal
     * @access public
     */
    public $ShippingTotal = null;

    /**
     * @var BasicAmountType $HandlingTotal
     * @access public
     */
    public $HandlingTotal = null;

    /**
     * @var BasicAmountType $TaxTotal
     * @access public
     */
    public $TaxTotal = null;

    /**
     * @var BasicAmountType $InsuranceTotal
     * @access public
     */
    public $InsuranceTotal = null;

    /**
     * @var BasicAmountType $ShippingDiscount
     * @access public
     */
    public $ShippingDiscount = null;

    /**
     * @var string $OrderDescription
     * @access public
     */
    public $OrderDescription = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @var string $IPAddress
     * @access public
     */
    public $IPAddress = null;

    /**
     * @var string $ShipToStore
     * @access public
     */
    public $ShipToStore = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $TransactionID
     * @param TransactionEntityType $TransactionEntity
     * @param BasicAmountType $Amount
     * @param AddressType $ShipToAddress
     * @param PaymentDetailsItemType $PaymentDetailsItem
     * @param BasicAmountType $ItemTotal
     * @param BasicAmountType $ShippingTotal
     * @param BasicAmountType $HandlingTotal
     * @param BasicAmountType $TaxTotal
     * @param BasicAmountType $InsuranceTotal
     * @param BasicAmountType $ShippingDiscount
     * @param string $OrderDescription
     * @param string $Custom
     * @param string $MsgSubID
     * @param string $IPAddress
     * @param string $ShipToStore
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $TransactionID, $TransactionEntity, $Amount, $ShipToAddress, $PaymentDetailsItem, $ItemTotal, $ShippingTotal, $HandlingTotal, $TaxTotal, $InsuranceTotal, $ShippingDiscount, $OrderDescription, $Custom, $MsgSubID, $IPAddress, $ShipToStore)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->TransactionID = $TransactionID;
      $this->TransactionEntity = $TransactionEntity;
      $this->Amount = $Amount;
      $this->ShipToAddress = $ShipToAddress;
      $this->PaymentDetailsItem = $PaymentDetailsItem;
      $this->ItemTotal = $ItemTotal;
      $this->ShippingTotal = $ShippingTotal;
      $this->HandlingTotal = $HandlingTotal;
      $this->TaxTotal = $TaxTotal;
      $this->InsuranceTotal = $InsuranceTotal;
      $this->ShippingDiscount = $ShippingDiscount;
      $this->OrderDescription = $OrderDescription;
      $this->Custom = $Custom;
      $this->MsgSubID = $MsgSubID;
      $this->IPAddress = $IPAddress;
      $this->ShipToStore = $ShipToStore;
    }

}
