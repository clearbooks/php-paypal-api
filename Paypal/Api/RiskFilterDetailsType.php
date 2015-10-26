<?php

namespace Paypal\Api;

class RiskFilterDetailsType
{

    /**
     * @var int $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @param int $Id
     * @param string $Name
     * @param string $Description
     * @access public
     */
    public function __construct($Id, $Name, $Description)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->Description = $Description;
    }

}
