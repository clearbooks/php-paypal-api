<?php

namespace Paypal\Api;

class CreateRecurringPaymentsProfileRequestDetailsType
{

    /**
     * @var string $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var CreditCardDetailsType $CreditCard
     * @access public
     */
    public $CreditCard = null;

    /**
     * @var RecurringPaymentsProfileDetailsType $RecurringPaymentsProfileDetails
     * @access public
     */
    public $RecurringPaymentsProfileDetails = null;

    /**
     * @var ScheduleDetailsType $ScheduleDetails
     * @access public
     */
    public $ScheduleDetails = null;

    /**
     * @var PaymentDetailsItemType[] $PaymentDetailsItem
     * @access public
     */
    public $PaymentDetailsItem = null;

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
     * @param string $Token
     * @param CreditCardDetailsType $CreditCard
     * @param RecurringPaymentsProfileDetailsType $RecurringPaymentsProfileDetails
     * @param ScheduleDetailsType $ScheduleDetails
     * @param PaymentDetailsItemType[] $PaymentDetailsItem
     * @param string $SoftDescriptor
     * @param string $SoftDescriptorCity
     * @access public
     */
    public function __construct($Token, $CreditCard, $RecurringPaymentsProfileDetails, $ScheduleDetails, $PaymentDetailsItem, $SoftDescriptor, $SoftDescriptorCity)
    {
      $this->Token = $Token;
      $this->CreditCard = $CreditCard;
      $this->RecurringPaymentsProfileDetails = $RecurringPaymentsProfileDetails;
      $this->ScheduleDetails = $ScheduleDetails;
      $this->PaymentDetailsItem = $PaymentDetailsItem;
      $this->SoftDescriptor = $SoftDescriptor;
      $this->SoftDescriptorCity = $SoftDescriptorCity;
    }

}
