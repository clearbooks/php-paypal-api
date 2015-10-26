<?php

namespace Paypal\Api;

class ExternalRememberMeOptInDetailsType
{

    /**
     * @var string $ExternalRememberMeOptIn
     * @access public
     */
    public $ExternalRememberMeOptIn = null;

    /**
     * @var ExternalRememberMeOwnerDetailsType $ExternalRememberMeOwnerDetails
     * @access public
     */
    public $ExternalRememberMeOwnerDetails = null;

    /**
     * @param string $ExternalRememberMeOptIn
     * @param ExternalRememberMeOwnerDetailsType $ExternalRememberMeOwnerDetails
     * @access public
     */
    public function __construct($ExternalRememberMeOptIn, $ExternalRememberMeOwnerDetails)
    {
      $this->ExternalRememberMeOptIn = $ExternalRememberMeOptIn;
      $this->ExternalRememberMeOwnerDetails = $ExternalRememberMeOwnerDetails;
    }

}
