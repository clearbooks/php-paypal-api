<?php

namespace Paypal\Api;

class UserIdPasswordType
{

    /**
     * @var string $AppId
     * @access public
     */
    public $AppId = null;

    /**
     * @var string $DevId
     * @access public
     */
    public $DevId = null;

    /**
     * @var string $AuthCert
     * @access public
     */
    public $AuthCert = null;

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
     * @var string $Subject
     * @access public
     */
    public $Subject = null;

    /**
     * @var string $AuthToken
     * @access public
     */
    public $AuthToken = null;

    /**
     * @param string $AppId
     * @param string $DevId
     * @param string $AuthCert
     * @param string $Username
     * @param string $Password
     * @param string $Signature
     * @param string $Subject
     * @param string $AuthToken
     * @access public
     */
    public function __construct($AppId, $DevId, $AuthCert, $Username, $Password, $Signature, $Subject, $AuthToken)
    {
      $this->AppId = $AppId;
      $this->DevId = $DevId;
      $this->AuthCert = $AuthCert;
      $this->Username = $Username;
      $this->Password = $Password;
      $this->Signature = $Signature;
      $this->Subject = $Subject;
      $this->AuthToken = $AuthToken;
    }

}
