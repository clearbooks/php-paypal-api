<?php

namespace Paypal\Api;

class AuthorizationResponseType
{

    /**
     * @var AckCodeType $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var ErrorType[] $AuthorizationError
     * @access public
     */
    public $AuthorizationError = null;

    /**
     * @param AckCodeType $Status
     * @param ErrorType[] $AuthorizationError
     * @access public
     */
    public function __construct($Status, $AuthorizationError)
    {
      $this->Status = $Status;
      $this->AuthorizationError = $AuthorizationError;
    }

}
