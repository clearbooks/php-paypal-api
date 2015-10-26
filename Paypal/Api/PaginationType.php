<?php

namespace Paypal\Api;

class PaginationType
{

    /**
     * @var int $EntriesPerPage
     * @access public
     */
    public $EntriesPerPage = null;

    /**
     * @var int $PageNumber
     * @access public
     */
    public $PageNumber = null;

    /**
     * @param int $EntriesPerPage
     * @param int $PageNumber
     * @access public
     */
    public function __construct($EntriesPerPage, $PageNumber)
    {
      $this->EntriesPerPage = $EntriesPerPage;
      $this->PageNumber = $PageNumber;
    }

}
