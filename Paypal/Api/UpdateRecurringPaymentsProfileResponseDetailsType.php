<?php

namespace Paypal\Api;

class UpdateRecurringPaymentsProfileResponseDetailsType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @param string $ProfileID
     * @access public
     */
    public function __construct($ProfileID)
    {
      $this->ProfileID = $ProfileID;
    }

}
