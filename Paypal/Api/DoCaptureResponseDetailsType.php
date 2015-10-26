<?php

namespace Paypal\Api;

class DoCaptureResponseDetailsType
{

    /**
     * @var string $AuthorizationID
     * @access public
     */
    public $AuthorizationID = null;

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @var string $PartnerFundingSourceID
     * @access public
     */
    public $PartnerFundingSourceID = null;

    /**
     * @param string $AuthorizationID
     * @param PaymentInfoType $PaymentInfo
     * @param string $MsgSubID
     * @param string $PartnerFundingSourceID
     * @access public
     */
    public function __construct($AuthorizationID, $PaymentInfo, $MsgSubID, $PartnerFundingSourceID)
    {
      $this->AuthorizationID = $AuthorizationID;
      $this->PaymentInfo = $PaymentInfo;
      $this->MsgSubID = $MsgSubID;
      $this->PartnerFundingSourceID = $PartnerFundingSourceID;
    }

}
