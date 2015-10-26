<?php

namespace Paypal\Api;

class DisplayControlDetailsType
{

    /**
     * @var string $InContextPaymentButtonImage
     * @access public
     */
    public $InContextPaymentButtonImage = null;

    /**
     * @param string $InContextPaymentButtonImage
     * @access public
     */
    public function __construct($InContextPaymentButtonImage)
    {
      $this->InContextPaymentButtonImage = $InContextPaymentButtonImage;
    }

}
