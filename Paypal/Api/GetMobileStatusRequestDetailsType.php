<?php

namespace Paypal\Api;

class GetMobileStatusRequestDetailsType
{

    /**
     * @var PhoneNumberType $Phone
     * @access public
     */
    public $Phone = null;

    /**
     * @param PhoneNumberType $Phone
     * @access public
     */
    public function __construct($Phone)
    {
      $this->Phone = $Phone;
    }

}
