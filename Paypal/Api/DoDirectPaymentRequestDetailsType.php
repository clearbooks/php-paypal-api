<?php

namespace Paypal\Api;

class DoDirectPaymentRequestDetailsType
{

    /**
     * @var PaymentActionCodeType $PaymentAction
     * @access public
     */
    public $PaymentAction = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     * @access public
     */
    public $PaymentDetails = null;

    /**
     * @var CreditCardDetailsType $CreditCard
     * @access public
     */
    public $CreditCard = null;

    /**
     * @var string $IPAddress
     * @access public
     */
    public $IPAddress = null;

    /**
     * @var string $MerchantSessionId
     * @access public
     */
    public $MerchantSessionId = null;

    /**
     * @var boolean $ReturnFMFDetails
     * @access public
     */
    public $ReturnFMFDetails = null;

    /**
     * @var string $SoftDescriptor
     * @access public
     */
    public $SoftDescriptor = null;

    /**
     * @var string $SoftDescriptorCity
     * @access public
     */
    public $SoftDescriptorCity = null;

    /**
     * @param PaymentActionCodeType $PaymentAction
     * @param PaymentDetailsType $PaymentDetails
     * @param CreditCardDetailsType $CreditCard
     * @param string $IPAddress
     * @param string $MerchantSessionId
     * @param boolean $ReturnFMFDetails
     * @param string $SoftDescriptor
     * @param string $SoftDescriptorCity
     * @access public
     */
    public function __construct($PaymentAction, $PaymentDetails, $CreditCard, $IPAddress, $MerchantSessionId, $ReturnFMFDetails, $SoftDescriptor, $SoftDescriptorCity)
    {
      $this->PaymentAction = $PaymentAction;
      $this->PaymentDetails = $PaymentDetails;
      $this->CreditCard = $CreditCard;
      $this->IPAddress = $IPAddress;
      $this->MerchantSessionId = $MerchantSessionId;
      $this->ReturnFMFDetails = $ReturnFMFDetails;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->SoftDescriptorCity = $SoftDescriptorCity;
    }

}
