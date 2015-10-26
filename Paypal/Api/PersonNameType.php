<?php

namespace Paypal\Api;

class PersonNameType
{

    /**
     * @var SalutationType $Salutation
     * @access public
     */
    public $Salutation = null;

    /**
     * @var NameType $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var NameType $MiddleName
     * @access public
     */
    public $MiddleName = null;

    /**
     * @var NameType $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var SuffixType $Suffix
     * @access public
     */
    public $Suffix = null;

    /**
     * @param SalutationType $Salutation
     * @param NameType $FirstName
     * @param NameType $MiddleName
     * @param NameType $LastName
     * @param SuffixType $Suffix
     * @access public
     */
    public function __construct($Salutation, $FirstName, $MiddleName, $LastName, $Suffix)
    {
      $this->Salutation = $Salutation;
      $this->FirstName = $FirstName;
      $this->MiddleName = $MiddleName;
      $this->LastName = $LastName;
      $this->Suffix = $Suffix;
    }

}
