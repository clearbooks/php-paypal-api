<?php

namespace Paypal\Api;

class ThreeDSecureResponseType
{

    /**
     * @var string $Vpas
     * @access public
     */
    public $Vpas = null;

    /**
     * @var string $EciSubmitted3DS
     * @access public
     */
    public $EciSubmitted3DS = null;

    /**
     * @param string $Vpas
     * @param string $EciSubmitted3DS
     * @access public
     */
    public function __construct($Vpas, $EciSubmitted3DS)
    {
      $this->Vpas = $Vpas;
      $this->EciSubmitted3DS = $EciSubmitted3DS;
    }

}
