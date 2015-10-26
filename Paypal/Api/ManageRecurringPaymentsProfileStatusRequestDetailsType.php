<?php

namespace Paypal\Api;

class ManageRecurringPaymentsProfileStatusRequestDetailsType
{

    /**
     * @var string $ProfileID
     * @access public
     */
    public $ProfileID = null;

    /**
     * @var StatusChangeActionType $Action
     * @access public
     */
    public $Action = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @param string $ProfileID
     * @param StatusChangeActionType $Action
     * @param string $Note
     * @access public
     */
    public function __construct($ProfileID, $Action, $Note)
    {
      $this->ProfileID = $ProfileID;
      $this->Action = $Action;
      $this->Note = $Note;
    }

}
