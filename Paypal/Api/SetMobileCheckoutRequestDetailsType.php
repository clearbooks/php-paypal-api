<?php

namespace Paypal\Api;

class SetMobileCheckoutRequestDetailsType
{

    /**
     * @var PhoneNumberType $BuyerPhone
     * @access public
     */
    public $BuyerPhone = null;

    /**
     * @var BasicAmountType $ItemAmount
     * @access public
     */
    public $ItemAmount = null;

    /**
     * @var BasicAmountType $Tax
     * @access public
     */
    public $Tax = null;

    /**
     * @var BasicAmountType $Shipping
     * @access public
     */
    public $Shipping = null;

    /**
     * @var string $ItemName
     * @access public
     */
    public $ItemName = null;

    /**
     * @var string $ItemNumber
     * @access public
     */
    public $ItemNumber = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var string $ReturnURL
     * @access public
     */
    public $ReturnURL = null;

    /**
     * @var string $CancelURL
     * @access public
     */
    public $CancelURL = null;

    /**
     * @var int $AddressDisplayOptions
     * @access public
     */
    public $AddressDisplayOptions = null;

    /**
     * @var int $SharePhone
     * @access public
     */
    public $SharePhone = null;

    /**
     * @var AddressType $ShipToAddress
     * @access public
     */
    public $ShipToAddress = null;

    /**
     * @var EmailAddressType $BuyerEmail
     * @access public
     */
    public $BuyerEmail = null;

    /**
     * @param PhoneNumberType $BuyerPhone
     * @param BasicAmountType $ItemAmount
     * @param BasicAmountType $Tax
     * @param BasicAmountType $Shipping
     * @param string $ItemName
     * @param string $ItemNumber
     * @param string $Custom
     * @param string $InvoiceID
     * @param string $ReturnURL
     * @param string $CancelURL
     * @param int $AddressDisplayOptions
     * @param int $SharePhone
     * @param AddressType $ShipToAddress
     * @param EmailAddressType $BuyerEmail
     * @access public
     */
    public function __construct($BuyerPhone, $ItemAmount, $Tax, $Shipping, $ItemName, $ItemNumber, $Custom, $InvoiceID, $ReturnURL, $CancelURL, $AddressDisplayOptions, $SharePhone, $ShipToAddress, $BuyerEmail)
    {
      $this->BuyerPhone = $BuyerPhone;
      $this->ItemAmount = $ItemAmount;
      $this->Tax = $Tax;
      $this->Shipping = $Shipping;
      $this->ItemName = $ItemName;
      $this->ItemNumber = $ItemNumber;
      $this->Custom = $Custom;
      $this->InvoiceID = $InvoiceID;
      $this->ReturnURL = $ReturnURL;
      $this->CancelURL = $CancelURL;
      $this->AddressDisplayOptions = $AddressDisplayOptions;
      $this->SharePhone = $SharePhone;
      $this->ShipToAddress = $ShipToAddress;
      $this->BuyerEmail = $BuyerEmail;
    }

}
