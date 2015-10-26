<?php

namespace Paypal\Api;

class ItemTrackingDetailsType
{

    /**
     * @var string $ItemNumber
     * @access public
     */
    public $ItemNumber = null;

    /**
     * @var string $ItemQty
     * @access public
     */
    public $ItemQty = null;

    /**
     * @var string $ItemQtyDelta
     * @access public
     */
    public $ItemQtyDelta = null;

    /**
     * @var string $ItemAlert
     * @access public
     */
    public $ItemAlert = null;

    /**
     * @var string $ItemCost
     * @access public
     */
    public $ItemCost = null;

    /**
     * @param string $ItemNumber
     * @param string $ItemQty
     * @param string $ItemQtyDelta
     * @param string $ItemAlert
     * @param string $ItemCost
     * @access public
     */
    public function __construct($ItemNumber, $ItemQty, $ItemQtyDelta, $ItemAlert, $ItemCost)
    {
      $this->ItemNumber = $ItemNumber;
      $this->ItemQty = $ItemQty;
      $this->ItemQtyDelta = $ItemQtyDelta;
      $this->ItemAlert = $ItemAlert;
      $this->ItemCost = $ItemCost;
    }

}
