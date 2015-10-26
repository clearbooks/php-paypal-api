<?php

namespace Paypal\Api;

class BusinessOwnerInfoType
{

    /**
     * @var PayerInfoType $Owner
     * @access public
     */
    public $Owner = null;

    /**
     * @var string $HomePhone
     * @access public
     */
    public $HomePhone = null;

    /**
     * @var string $MobilePhone
     * @access public
     */
    public $MobilePhone = null;

    /**
     * @var string $SSN
     * @access public
     */
    public $SSN = null;

    /**
     * @param PayerInfoType $Owner
     * @param string $HomePhone
     * @param string $MobilePhone
     * @param string $SSN
     * @access public
     */
    public function __construct($Owner, $HomePhone, $MobilePhone, $SSN)
    {
      $this->Owner = $Owner;
      $this->HomePhone = $HomePhone;
      $this->MobilePhone = $MobilePhone;
      $this->SSN = $SSN;
    }

}
