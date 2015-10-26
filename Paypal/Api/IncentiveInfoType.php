<?php

namespace Paypal\Api;

class IncentiveInfoType
{

    /**
     * @var string $IncentiveCode
     * @access public
     */
    public $IncentiveCode = null;

    /**
     * @var IncentiveApplyIndicationType[] $ApplyIndication
     * @access public
     */
    public $ApplyIndication = null;

    /**
     * @param string $IncentiveCode
     * @param IncentiveApplyIndicationType[] $ApplyIndication
     * @access public
     */
    public function __construct($IncentiveCode, $ApplyIndication)
    {
      $this->IncentiveCode = $IncentiveCode;
      $this->ApplyIndication = $ApplyIndication;
    }

}
