<?php

namespace Paypal\Api;

class OptionDetailsType
{

    /**
     * @var string $OptionName
     * @access public
     */
    public $OptionName = null;

    /**
     * @var OptionSelectionDetailsType $OptionSelectionDetails
     * @access public
     */
    public $OptionSelectionDetails = null;

    /**
     * @param string $OptionName
     * @param OptionSelectionDetailsType $OptionSelectionDetails
     * @access public
     */
    public function __construct($OptionName, $OptionSelectionDetails)
    {
      $this->OptionName = $OptionName;
      $this->OptionSelectionDetails = $OptionSelectionDetails;
    }

}
