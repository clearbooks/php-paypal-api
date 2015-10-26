<?php

namespace Paypal\Api;

class CreateMobilePaymentRequestDetailsType
{

    /**
     * @var MobilePaymentCodeType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var PaymentActionCodeType $PaymentAction
     * @access public
     */
    public $PaymentAction = null;

    /**
     * @var PhoneNumberType $SenderPhone
     * @access public
     */
    public $SenderPhone = null;

    /**
     * @var MobileRecipientCodeType $RecipientType
     * @access public
     */
    public $RecipientType = null;

    /**
     * @var string $RecipientEmail
     * @access public
     */
    public $RecipientEmail = null;

    /**
     * @var PhoneNumberType $RecipientPhone
     * @access public
     */
    public $RecipientPhone = null;

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
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var string $CustomID
     * @access public
     */
    public $CustomID = null;

    /**
     * @var int $SharePhoneNumber
     * @access public
     */
    public $SharePhoneNumber = null;

    /**
     * @var int $ShareHomeAddress
     * @access public
     */
    public $ShareHomeAddress = null;

    /**
     * @param MobilePaymentCodeType $PaymentType
     * @param PaymentActionCodeType $PaymentAction
     * @param PhoneNumberType $SenderPhone
     * @param MobileRecipientCodeType $RecipientType
     * @param string $RecipientEmail
     * @param PhoneNumberType $RecipientPhone
     * @param BasicAmountType $ItemAmount
     * @param BasicAmountType $Tax
     * @param BasicAmountType $Shipping
     * @param string $ItemName
     * @param string $ItemNumber
     * @param string $Note
     * @param string $CustomID
     * @param int $SharePhoneNumber
     * @param int $ShareHomeAddress
     * @access public
     */
    public function __construct($PaymentType, $PaymentAction, $SenderPhone, $RecipientType, $RecipientEmail, $RecipientPhone, $ItemAmount, $Tax, $Shipping, $ItemName, $ItemNumber, $Note, $CustomID, $SharePhoneNumber, $ShareHomeAddress)
    {
      $this->PaymentType = $PaymentType;
      $this->PaymentAction = $PaymentAction;
      $this->SenderPhone = $SenderPhone;
      $this->RecipientType = $RecipientType;
      $this->RecipientEmail = $RecipientEmail;
      $this->RecipientPhone = $RecipientPhone;
      $this->ItemAmount = $ItemAmount;
      $this->Tax = $Tax;
      $this->Shipping = $Shipping;
      $this->ItemName = $ItemName;
      $this->ItemNumber = $ItemNumber;
      $this->Note = $Note;
      $this->CustomID = $CustomID;
      $this->SharePhoneNumber = $SharePhoneNumber;
      $this->ShareHomeAddress = $ShareHomeAddress;
    }

}
