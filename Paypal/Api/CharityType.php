<?php

namespace Paypal\Api;

class CharityType
{

    /**
     * @var string $CharityName
     * @access public
     */
    public $CharityName = null;

    /**
     * @var int $CharityNumber
     * @access public
     */
    public $CharityNumber = null;

    /**
     * @var float $DonationPercent
     * @access public
     */
    public $DonationPercent = null;

    /**
     * @param string $CharityName
     * @param int $CharityNumber
     * @param float $DonationPercent
     * @access public
     */
    public function __construct($CharityName, $CharityNumber, $DonationPercent)
    {
      $this->CharityName = $CharityName;
      $this->CharityNumber = $CharityNumber;
      $this->DonationPercent = $DonationPercent;
    }

}
