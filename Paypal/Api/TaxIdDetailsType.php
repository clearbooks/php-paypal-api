<?php

namespace Paypal\Api;

class TaxIdDetailsType
{

    /**
     * @var string $TaxIdType
     * @access public
     */
    public $TaxIdType = null;

    /**
     * @var string $TaxId
     * @access public
     */
    public $TaxId = null;

    /**
     * @param string $TaxIdType
     * @param string $TaxId
     * @access public
     */
    public function __construct($TaxIdType, $TaxId)
    {
      $this->TaxIdType = $TaxIdType;
      $this->TaxId = $TaxId;
    }

}
