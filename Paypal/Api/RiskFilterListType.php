<?php

namespace Paypal\Api;

class RiskFilterListType
{

    /**
     * @var RiskFilterDetailsType[] $Filters
     * @access public
     */
    public $Filters = null;

    /**
     * @param RiskFilterDetailsType[] $Filters
     * @access public
     */
    public function __construct($Filters)
    {
      $this->Filters = $Filters;
    }

}
