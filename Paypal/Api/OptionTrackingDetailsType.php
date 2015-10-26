<?php

namespace Paypal\Api;

class OptionTrackingDetailsType
{

    /**
     * @var string $OptionNumber
     * @access public
     */
    public $OptionNumber = null;

    /**
     * @var string $OptionQty
     * @access public
     */
    public $OptionQty = null;

    /**
     * @var string $OptionSelect
     * @access public
     */
    public $OptionSelect = null;

    /**
     * @var string $OptionQtyDelta
     * @access public
     */
    public $OptionQtyDelta = null;

    /**
     * @var string $OptionAlert
     * @access public
     */
    public $OptionAlert = null;

    /**
     * @var string $OptionCost
     * @access public
     */
    public $OptionCost = null;

    /**
     * @param string $OptionNumber
     * @param string $OptionQty
     * @param string $OptionSelect
     * @param string $OptionQtyDelta
     * @param string $OptionAlert
     * @param string $OptionCost
     * @access public
     */
    public function __construct($OptionNumber, $OptionQty, $OptionSelect, $OptionQtyDelta, $OptionAlert, $OptionCost)
    {
      $this->OptionNumber = $OptionNumber;
      $this->OptionQty = $OptionQty;
      $this->OptionSelect = $OptionSelect;
      $this->OptionQtyDelta = $OptionQtyDelta;
      $this->OptionAlert = $OptionAlert;
      $this->OptionCost = $OptionCost;
    }

}
