<?php

namespace Paypal\Api;

class VATDetailsType
{

    /**
     * @var boolean $BusinessSeller
     * @access public
     */
    public $BusinessSeller = null;

    /**
     * @var boolean $RestrictedToBusiness
     * @access public
     */
    public $RestrictedToBusiness = null;

    /**
     * @var float $VATPercent
     * @access public
     */
    public $VATPercent = null;

    /**
     * @param boolean $BusinessSeller
     * @param boolean $RestrictedToBusiness
     * @param float $VATPercent
     * @access public
     */
    public function __construct($BusinessSeller, $RestrictedToBusiness, $VATPercent)
    {
      $this->BusinessSeller = $BusinessSeller;
      $this->RestrictedToBusiness = $RestrictedToBusiness;
      $this->VATPercent = $VATPercent;
    }

}
