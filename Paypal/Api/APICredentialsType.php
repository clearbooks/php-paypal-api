<?php

namespace Paypal\Api;

class APICredentialsType
{

    /**
     * @var string $Username
     * @access public
     */
    public $Username = null;

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

    /**
     * @var string $Signature
     * @access public
     */
    public $Signature = null;

    /**
     * @var string $Certificate
     * @access public
     */
    public $Certificate = null;

    /**
     * @var APIAuthenticationType $Type
     * @access public
     */
    public $Type = null;

    /**
     * @param string $Username
     * @param string $Password
     * @param string $Signature
     * @param string $Certificate
     * @param APIAuthenticationType $Type
     * @access public
     */
    public function __construct($Username, $Password, $Signature, $Certificate, $Type)
    {
      $this->Username = $Username;
      $this->Password = $Password;
      $this->Signature = $Signature;
      $this->Certificate = $Certificate;
      $this->Type = $Type;
    }

}
