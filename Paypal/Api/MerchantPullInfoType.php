<?php

namespace Paypal\Api;

class MerchantPullInfoType
{

    /**
     * @var MerchantPullStatusCodeType $MpStatus
     * @access public
     */
    public $MpStatus = null;

    /**
     * @var BasicAmountType $MpMax
     * @access public
     */
    public $MpMax = null;

    /**
     * @var string $MpCustom
     * @access public
     */
    public $MpCustom = null;

    /**
     * @var string $Desc
     * @access public
     */
    public $Desc = null;

    /**
     * @var string $Invoice
     * @access public
     */
    public $Invoice = null;

    /**
     * @var string $Custom
     * @access public
     */
    public $Custom = null;

    /**
     * @var string $PaymentSourceID
     * @access public
     */
    public $PaymentSourceID = null;

    /**
     * @param MerchantPullStatusCodeType $MpStatus
     * @param BasicAmountType $MpMax
     * @param string $MpCustom
     * @param string $Desc
     * @param string $Invoice
     * @param string $Custom
     * @param string $PaymentSourceID
     * @access public
     */
    public function __construct($MpStatus, $MpMax, $MpCustom, $Desc, $Invoice, $Custom, $PaymentSourceID)
    {
      $this->MpStatus = $MpStatus;
      $this->MpMax = $MpMax;
      $this->MpCustom = $MpCustom;
      $this->Desc = $Desc;
      $this->Invoice = $Invoice;
      $this->Custom = $Custom;
      $this->PaymentSourceID = $PaymentSourceID;
    }

}
