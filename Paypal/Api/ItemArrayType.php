<?php

namespace Paypal\Api;

class ItemArrayType
{

    /**
     * @var ItemType $Item
     * @access public
     */
    public $Item = null;

    /**
     * @param ItemType $Item
     * @access public
     */
    public function __construct($Item)
    {
      $this->Item = $Item;
    }

}
