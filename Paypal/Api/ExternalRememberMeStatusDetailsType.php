<?php

namespace Paypal\Api;

class ExternalRememberMeStatusDetailsType
{

    /**
     * @var int $ExternalRememberMeStatus
     * @access public
     */
    public $ExternalRememberMeStatus = null;

    /**
     * @var string $ExternalRememberMeID
     * @access public
     */
    public $ExternalRememberMeID = null;

    /**
     * @param int $ExternalRememberMeStatus
     * @param string $ExternalRememberMeID
     * @access public
     */
    public function __construct($ExternalRememberMeStatus, $ExternalRememberMeID)
    {
      $this->ExternalRememberMeStatus = $ExternalRememberMeStatus;
      $this->ExternalRememberMeID = $ExternalRememberMeID;
    }

}
