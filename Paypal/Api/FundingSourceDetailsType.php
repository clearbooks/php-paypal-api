<?php

namespace Paypal\Api;

class FundingSourceDetailsType
{

    /**
     * @var string $AllowPushFunding
     * @access public
     */
    public $AllowPushFunding = null;

    /**
     * @var UserSelectedFundingSourceType $UserSelectedFundingSource
     * @access public
     */
    public $UserSelectedFundingSource = null;

    /**
     * @param string $AllowPushFunding
     * @param UserSelectedFundingSourceType $UserSelectedFundingSource
     * @access public
     */
    public function __construct($AllowPushFunding, $UserSelectedFundingSource)
    {
      $this->AllowPushFunding = $AllowPushFunding;
      $this->UserSelectedFundingSource = $UserSelectedFundingSource;
    }

}
