<?php

namespace Paypal\Api;

class SchedulingInfoType
{

    /**
     * @var int $MaxScheduledMinutes
     * @access public
     */
    public $MaxScheduledMinutes = null;

    /**
     * @var int $MinScheduledMinutes
     * @access public
     */
    public $MinScheduledMinutes = null;

    /**
     * @var int $MaxScheduledItems
     * @access public
     */
    public $MaxScheduledItems = null;

    /**
     * @param int $MaxScheduledMinutes
     * @param int $MinScheduledMinutes
     * @param int $MaxScheduledItems
     * @access public
     */
    public function __construct($MaxScheduledMinutes, $MinScheduledMinutes, $MaxScheduledItems)
    {
      $this->MaxScheduledMinutes = $MaxScheduledMinutes;
      $this->MinScheduledMinutes = $MinScheduledMinutes;
      $this->MaxScheduledItems = $MaxScheduledItems;
    }

}
