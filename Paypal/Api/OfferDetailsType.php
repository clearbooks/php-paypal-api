<?php

namespace Paypal\Api;

class OfferDetailsType
{

    /**
     * @var string $OfferCode
     * @access public
     */
    public $OfferCode = null;

    /**
     * @var BMLOfferInfoType $BMLOfferInfo
     * @access public
     */
    public $BMLOfferInfo = null;

    /**
     * @param string $OfferCode
     * @param BMLOfferInfoType $BMLOfferInfo
     * @access public
     */
    public function __construct($OfferCode, $BMLOfferInfo)
    {
      $this->OfferCode = $OfferCode;
      $this->BMLOfferInfo = $BMLOfferInfo;
    }

}
