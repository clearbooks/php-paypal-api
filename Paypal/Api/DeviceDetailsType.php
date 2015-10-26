<?php

namespace Paypal\Api;

class DeviceDetailsType
{

    /**
     * @var string $DeviceID
     * @access public
     */
    public $DeviceID = null;

    /**
     * @param string $DeviceID
     * @access public
     */
    public function __construct($DeviceID)
    {
      $this->DeviceID = $DeviceID;
    }

}
