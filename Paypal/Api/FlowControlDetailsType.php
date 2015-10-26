<?php

namespace Paypal\Api;

class FlowControlDetailsType
{

    /**
     * @var string $ErrorURL
     * @access public
     */
    public $ErrorURL = null;

    /**
     * @var string $InContextReturnURL
     * @access public
     */
    public $InContextReturnURL = null;

    /**
     * @param string $ErrorURL
     * @param string $InContextReturnURL
     * @access public
     */
    public function __construct($ErrorURL, $InContextReturnURL)
    {
      $this->ErrorURL = $ErrorURL;
      $this->InContextReturnURL = $InContextReturnURL;
    }

}
