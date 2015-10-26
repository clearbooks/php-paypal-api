<?php

namespace Paypal\Api;

class IncentiveRequestDetailsType
{

    /**
     * @var string $RequestId
     * @access public
     */
    public $RequestId = null;

    /**
     * @var IncentiveRequestCodeType $RequestType
     * @access public
     */
    public $RequestType = null;

    /**
     * @var IncentiveRequestDetailLevelCodeType $RequestDetailLevel
     * @access public
     */
    public $RequestDetailLevel = null;

    /**
     * @param string $RequestId
     * @param IncentiveRequestCodeType $RequestType
     * @param IncentiveRequestDetailLevelCodeType $RequestDetailLevel
     * @access public
     */
    public function __construct($RequestId, $RequestType, $RequestDetailLevel)
    {
      $this->RequestId = $RequestId;
      $this->RequestType = $RequestType;
      $this->RequestDetailLevel = $RequestDetailLevel;
    }

}
