<?php

namespace Paypal\Api;

class ModifiedFieldType
{

    /**
     * @var string $Field
     * @access public
     */
    public $Field = null;

    /**
     * @var ModifyCodeType $ModifyType
     * @access public
     */
    public $ModifyType = null;

    /**
     * @param string $Field
     * @param ModifyCodeType $ModifyType
     * @access public
     */
    public function __construct($Field, $ModifyType)
    {
      $this->Field = $Field;
      $this->ModifyType = $ModifyType;
    }

}
