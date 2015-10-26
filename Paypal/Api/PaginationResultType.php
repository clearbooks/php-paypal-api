<?php

namespace Paypal\Api;

class PaginationResultType
{

    /**
     * @var int $TotalNumberOfPages
     * @access public
     */
    public $TotalNumberOfPages = null;

    /**
     * @var int $TotalNumberOfEntries
     * @access public
     */
    public $TotalNumberOfEntries = null;

    /**
     * @param int $TotalNumberOfPages
     * @param int $TotalNumberOfEntries
     * @access public
     */
    public function __construct($TotalNumberOfPages, $TotalNumberOfEntries)
    {
      $this->TotalNumberOfPages = $TotalNumberOfPages;
      $this->TotalNumberOfEntries = $TotalNumberOfEntries;
    }

}
