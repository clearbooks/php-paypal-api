<?php

namespace Paypal\Api;

class WalletItemsType
{

    /**
     * @var WalletItemType $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var string $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @param WalletItemType $Type
     * @param string $Id
     * @param string $Description
     * @access public
     */
    public function __construct($Type, $Id, $Description)
    {
      $this->Type = $Type;
      $this->Id = $Id;
      $this->Description = $Description;
    }

}
