<?php

namespace Paypal\Api;

class MerchantDataType
{

    /**
     * @var TupleType $MerchantDataTuple
     * @access public
     */
    public $MerchantDataTuple = null;

    /**
     * @param TupleType $MerchantDataTuple
     * @access public
     */
    public function __construct($MerchantDataTuple)
    {
      $this->MerchantDataTuple = $MerchantDataTuple;
    }

}
