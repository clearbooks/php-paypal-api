<?php

namespace Paypal\Api;

class OptionSelectionDetailsType
{

    /**
     * @var string $OptionSelection
     * @access public
     */
    public $OptionSelection = null;

    /**
     * @var string $Price
     * @access public
     */
    public $Price = null;

    /**
     * @var OptionTypeListType $OptionType
     * @access public
     */
    public $OptionType = null;

    /**
     * @var InstallmentDetailsType $PaymentPeriod
     * @access public
     */
    public $PaymentPeriod = null;

    /**
     * @param string $OptionSelection
     * @param string $Price
     * @param OptionTypeListType $OptionType
     * @param InstallmentDetailsType $PaymentPeriod
     * @access public
     */
    public function __construct($OptionSelection, $Price, $OptionType, $PaymentPeriod)
    {
      $this->OptionSelection = $OptionSelection;
      $this->Price = $Price;
      $this->OptionType = $OptionType;
      $this->PaymentPeriod = $PaymentPeriod;
    }

}
