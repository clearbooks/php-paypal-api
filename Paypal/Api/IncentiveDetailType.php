<?php

namespace Paypal\Api;

class IncentiveDetailType
{

    /**
     * @var string $RedemptionCode
     * @access public
     */
    public $RedemptionCode = null;

    /**
     * @var string $DisplayCode
     * @access public
     */
    public $DisplayCode = null;

    /**
     * @var string $ProgramId
     * @access public
     */
    public $ProgramId = null;

    /**
     * @var IncentiveTypeCodeType $IncentiveType
     * @access public
     */
    public $IncentiveType = null;

    /**
     * @var string $IncentiveDescription
     * @access public
     */
    public $IncentiveDescription = null;

    /**
     * @var IncentiveAppliedToType[] $AppliedTo
     * @access public
     */
    public $AppliedTo = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @param string $RedemptionCode
     * @param string $DisplayCode
     * @param string $ProgramId
     * @param IncentiveTypeCodeType $IncentiveType
     * @param string $IncentiveDescription
     * @param IncentiveAppliedToType[] $AppliedTo
     * @param string $Status
     * @param string $ErrorCode
     * @access public
     */
    public function __construct($RedemptionCode, $DisplayCode, $ProgramId, $IncentiveType, $IncentiveDescription, $AppliedTo, $Status, $ErrorCode)
    {
      $this->RedemptionCode = $RedemptionCode;
      $this->DisplayCode = $DisplayCode;
      $this->ProgramId = $ProgramId;
      $this->IncentiveType = $IncentiveType;
      $this->IncentiveDescription = $IncentiveDescription;
      $this->AppliedTo = $AppliedTo;
      $this->Status = $Status;
      $this->ErrorCode = $ErrorCode;
    }

}
