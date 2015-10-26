<?php

namespace Paypal\Api;

class SenderDetailsType
{

    /**
     * @var DeviceDetailsType $DeviceDetails
     * @access public
     */
    public $DeviceDetails = null;

    /**
     * @param DeviceDetailsType $DeviceDetails
     * @access public
     */
    public function __construct($DeviceDetails)
    {
      $this->DeviceDetails = $DeviceDetails;
    }

}
