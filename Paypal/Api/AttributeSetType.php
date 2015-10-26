<?php

namespace Paypal\Api;

class AttributeSetType
{

    /**
     * @var AttributeType[] $Attribute
     * @access public
     */
    public $Attribute = null;

    /**
     * @var string $AttributeSetID
     * @access public
     */
    public $AttributeSetID = null;

    /**
     * @param AttributeType[] $Attribute
     * @param string $AttributeSetID
     * @access public
     */
    public function __construct($Attribute, $AttributeSetID)
    {
      $this->Attribute = $Attribute;
      $this->AttributeSetID = $AttributeSetID;
    }

}
