<?php

namespace Paypal\Api;

class CategoryArrayType
{

    /**
     * @var CategoryType $Category
     * @access public
     */
    public $Category = null;

    /**
     * @param CategoryType $Category
     * @access public
     */
    public function __construct($Category)
    {
      $this->Category = $Category;
    }

}
