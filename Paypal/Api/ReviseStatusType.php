<?php

namespace Paypal\Api;

class ReviseStatusType
{

    /**
     * @var boolean $ItemRevised
     * @access public
     */
    public $ItemRevised = null;

    /**
     * @var boolean $BuyItNowAdded
     * @access public
     */
    public $BuyItNowAdded = null;

    /**
     * @var boolean $BuyItNowLowered
     * @access public
     */
    public $BuyItNowLowered = null;

    /**
     * @var boolean $ReserveLowered
     * @access public
     */
    public $ReserveLowered = null;

    /**
     * @var boolean $ReserveRemoved
     * @access public
     */
    public $ReserveRemoved = null;

    /**
     * @param boolean $ItemRevised
     * @param boolean $BuyItNowAdded
     * @param boolean $BuyItNowLowered
     * @param boolean $ReserveLowered
     * @param boolean $ReserveRemoved
     * @access public
     */
    public function __construct($ItemRevised, $BuyItNowAdded, $BuyItNowLowered, $ReserveLowered, $ReserveRemoved)
    {
      $this->ItemRevised = $ItemRevised;
      $this->BuyItNowAdded = $BuyItNowAdded;
      $this->BuyItNowLowered = $BuyItNowLowered;
      $this->ReserveLowered = $ReserveLowered;
      $this->ReserveRemoved = $ReserveRemoved;
    }

}
