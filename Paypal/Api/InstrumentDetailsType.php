<?php

namespace Paypal\Api;

class InstrumentDetailsType
{

    /**
     * @var string $InstrumentCategory
     * @access public
     */
    public $InstrumentCategory = null;

    /**
     * @var string $InstrumentID
     * @access public
     */
    public $InstrumentID = null;

    /**
     * @param string $InstrumentCategory
     * @param string $InstrumentID
     * @access public
     */
    public function __construct($InstrumentCategory, $InstrumentID)
    {
      $this->InstrumentCategory = $InstrumentCategory;
      $this->InstrumentID = $InstrumentID;
    }

}
