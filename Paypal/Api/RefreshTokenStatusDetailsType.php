<?php

namespace Paypal\Api;

class RefreshTokenStatusDetailsType
{

    /**
     * @var int $RefreshTokenStatus
     * @access public
     */
    public $RefreshTokenStatus = null;

    /**
     * @var string $RefreshToken
     * @access public
     */
    public $RefreshToken = null;

    /**
     * @var string $ImmutableID
     * @access public
     */
    public $ImmutableID = null;

    /**
     * @param int $RefreshTokenStatus
     * @param string $RefreshToken
     * @param string $ImmutableID
     * @access public
     */
    public function __construct($RefreshTokenStatus, $RefreshToken, $ImmutableID)
    {
      $this->RefreshTokenStatus = $RefreshTokenStatus;
      $this->RefreshToken = $RefreshToken;
      $this->ImmutableID = $ImmutableID;
    }

}
