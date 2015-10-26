<?php

namespace Paypal\Api;

class ListOfAttributeSetType
{

    /**
     * @var AttributeSetType[] $AttributeSet
     * @access public
     */
    public $AttributeSet = null;

    /**
     * @param AttributeSetType[] $AttributeSet
     * @access public
     */
    public function __construct($AttributeSet)
    {
      $this->AttributeSet = $AttributeSet;
    }

}
