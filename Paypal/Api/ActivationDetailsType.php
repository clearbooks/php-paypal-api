<?php

namespace Paypal\Api;

class ActivationDetailsType
{

    /**
     * @var BasicAmountType $InitialAmount
     * @access public
     */
    public $InitialAmount = null;

    /**
     * @var FailedPaymentActionType $FailedInitialAmountAction
     * @access public
     */
    public $FailedInitialAmountAction = null;

    /**
     * @param BasicAmountType $InitialAmount
     * @param FailedPaymentActionType $FailedInitialAmountAction
     * @access public
     */
    public function __construct($InitialAmount, $FailedInitialAmountAction)
    {
      $this->InitialAmount = $InitialAmount;
      $this->FailedInitialAmountAction = $FailedInitialAmountAction;
    }

}
