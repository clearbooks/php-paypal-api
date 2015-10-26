<?php

namespace Paypal\Api;

class RecurringPaymentsProfileDetailsType
{

    /**
     * @var string $SubscriberName
     * @access public
     */
    public $SubscriberName = null;

    /**
     * @var AddressType $SubscriberShippingAddress
     * @access public
     */
    public $SubscriberShippingAddress = null;

    /**
     * @var dateTime $BillingStartDate
     * @access public
     */
    public $BillingStartDate = null;

    /**
     * @var string $ProfileReference
     * @access public
     */
    public $ProfileReference = null;

    /**
     * @param string $SubscriberName
     * @param AddressType $SubscriberShippingAddress
     * @param dateTime $BillingStartDate
     * @param string $ProfileReference
     * @access public
     */
    public function __construct($SubscriberName, $SubscriberShippingAddress, $BillingStartDate, $ProfileReference)
    {
      $this->SubscriberName = $SubscriberName;
      $this->SubscriberShippingAddress = $SubscriberShippingAddress;
      $this->BillingStartDate = $BillingStartDate;
      $this->ProfileReference = $ProfileReference;
    }

}
