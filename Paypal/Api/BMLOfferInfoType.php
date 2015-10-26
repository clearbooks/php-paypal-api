<?php

namespace Paypal\Api;

class BMLOfferInfoType
{

    /**
     * @var string $OfferTrackingID
     * @access public
     */
    public $OfferTrackingID = null;

    /**
     * @param string $OfferTrackingID
     * @access public
     */
    public function __construct($OfferTrackingID)
    {
      $this->OfferTrackingID = $OfferTrackingID;
    }

}
