<?php

namespace Paypal\Api;

class BillingApprovalDetailsType
{

    /**
     * @var ApprovalTypeType $ApprovalType
     * @access public
     */
    public $ApprovalType = null;

    /**
     * @var ApprovalSubTypeType $ApprovalSubType
     * @access public
     */
    public $ApprovalSubType = null;

    /**
     * @var OrderDetailsType $OrderDetails
     * @access public
     */
    public $OrderDetails = null;

    /**
     * @var PaymentDirectivesType $PaymentDirectives
     * @access public
     */
    public $PaymentDirectives = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @param ApprovalTypeType $ApprovalType
     * @param ApprovalSubTypeType $ApprovalSubType
     * @param OrderDetailsType $OrderDetails
     * @param PaymentDirectivesType $PaymentDirectives
     * @param string $Custom
     * @access public
     */
    public function __construct($ApprovalType, $ApprovalSubType, $OrderDetails, $PaymentDirectives, $Custom)
    {
      $this->ApprovalType = $ApprovalType;
      $this->ApprovalSubType = $ApprovalSubType;
      $this->OrderDetails = $OrderDetails;
      $this->PaymentDirectives = $PaymentDirectives;
      $this->Custom = $Custom;
    }

}
