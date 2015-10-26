<?php

namespace Paypal\Api;

class CustomSecurityHeaderType
{

    /**
     * @var string $eBayAuthToken
     * @access public
     */
    public $eBayAuthToken = null;

    /**
     * @var string $HardExpirationWarning
     * @access public
     */
    public $HardExpirationWarning = null;

    /**
     * @var UserIdPasswordType $Credentials
     * @access public
     */
    public $Credentials = null;

    /**
     * @param string $eBayAuthToken
     * @param string $HardExpirationWarning
     * @param UserIdPasswordType $Credentials
     * @access public
     */
    public function __construct($eBayAuthToken, $HardExpirationWarning, $Credentials)
    {
      $this->eBayAuthToken = $eBayAuthToken;
      $this->HardExpirationWarning = $HardExpirationWarning;
      $this->Credentials = $Credentials;
    }

}
