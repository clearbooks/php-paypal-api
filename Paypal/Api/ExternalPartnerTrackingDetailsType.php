<?php

namespace Paypal\Api;

class ExternalPartnerTrackingDetailsType
{

    /**
     * @var string $ExternalPartnerSegmentID
     * @access public
     */
    public $ExternalPartnerSegmentID = null;

    /**
     * @param string $ExternalPartnerSegmentID
     * @access public
     */
    public function __construct($ExternalPartnerSegmentID)
    {
      $this->ExternalPartnerSegmentID = $ExternalPartnerSegmentID;
    }

}
