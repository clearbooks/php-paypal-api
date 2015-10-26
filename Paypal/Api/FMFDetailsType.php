<?php

namespace Paypal\Api;

class FMFDetailsType
{

    /**
     * @var RiskFilterListType $AcceptFilters
     * @access public
     */
    public $AcceptFilters = null;

    /**
     * @var RiskFilterListType $PendingFilters
     * @access public
     */
    public $PendingFilters = null;

    /**
     * @var RiskFilterListType $DenyFilters
     * @access public
     */
    public $DenyFilters = null;

    /**
     * @var RiskFilterListType $ReportFilters
     * @access public
     */
    public $ReportFilters = null;

    /**
     * @param RiskFilterListType $AcceptFilters
     * @param RiskFilterListType $PendingFilters
     * @param RiskFilterListType $DenyFilters
     * @param RiskFilterListType $ReportFilters
     * @access public
     */
    public function __construct($AcceptFilters, $PendingFilters, $DenyFilters, $ReportFilters)
    {
      $this->AcceptFilters = $AcceptFilters;
      $this->PendingFilters = $PendingFilters;
      $this->DenyFilters = $DenyFilters;
      $this->ReportFilters = $ReportFilters;
    }

}
