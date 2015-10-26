<?php

namespace Paypal\Api;

class RememberMeIDInfoType
{

    /**
     * @var string $ExternalRememberMeID
     * @access public
     */
    public $ExternalRememberMeID = null;

    /**
     * @param string $ExternalRememberMeID
     * @access public
     */
    public function __construct($ExternalRememberMeID)
    {
      $this->ExternalRememberMeID = $ExternalRememberMeID;
    }

}
