<?php

namespace Paypal\Api;

class MerchantStoreDetailsType
{

    /**
     * @var string $StoreID
     * @access public
     */
    public $StoreID = null;

    /**
     * @var string $TerminalID
     * @access public
     */
    public $TerminalID = null;

    /**
     * @param string $StoreID
     * @param string $TerminalID
     * @access public
     */
    public function __construct($StoreID, $TerminalID)
    {
      $this->StoreID = $StoreID;
      $this->TerminalID = $TerminalID;
    }

}
