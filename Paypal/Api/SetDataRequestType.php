<?php

namespace Paypal\Api;

class SetDataRequestType
{

    /**
     * @var BillingApprovalDetailsType[] $BillingApprovalDetails
     * @access public
     */
    public $BillingApprovalDetails = null;

    /**
     * @var BuyerDetailType $BuyerDetail
     * @access public
     */
    public $BuyerDetail = null;

    /**
     * @var InfoSharingDirectivesType $InfoSharingDirectives
     * @access public
     */
    public $InfoSharingDirectives = null;

    /**
     * @var boolean $RetrieveShippingAddress
     * @access public
     */
    public $RetrieveShippingAddress = null;

    /**
     * @var UserChannelCodeType $UserChannel
     * @access public
     */
    public $UserChannel = null;

    /**
     * @var boolean $ReqConfirmShipping
     * @access public
     */
    public $ReqConfirmShipping = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     * @access public
     */
    public $PaymentDetails = null;

    /**
     * @var ExternalPartnerTrackingDetailsType $ExternalPartnerTrackingDetails
     * @access public
     */
    public $ExternalPartnerTrackingDetails = null;

    /**
     * @var string $URI
     * @access public
     */
    public $URI = null;

    /**
     * @param BillingApprovalDetailsType[] $BillingApprovalDetails
     * @param BuyerDetailType $BuyerDetail
     * @param InfoSharingDirectivesType $InfoSharingDirectives
     * @param boolean $RetrieveShippingAddress
     * @param UserChannelCodeType $UserChannel
     * @param boolean $ReqConfirmShipping
     * @param PaymentDetailsType $PaymentDetails
     * @param ExternalPartnerTrackingDetailsType $ExternalPartnerTrackingDetails
     * @param string $URI
     * @access public
     */
    public function __construct($BillingApprovalDetails, $BuyerDetail, $InfoSharingDirectives, $RetrieveShippingAddress, $UserChannel, $ReqConfirmShipping, $PaymentDetails, $ExternalPartnerTrackingDetails, $URI)
    {
      $this->BillingApprovalDetails = $BillingApprovalDetails;
      $this->BuyerDetail = $BuyerDetail;
      $this->InfoSharingDirectives = $InfoSharingDirectives;
      $this->RetrieveShippingAddress = $RetrieveShippingAddress;
      $this->UserChannel = $UserChannel;
      $this->ReqConfirmShipping = $ReqConfirmShipping;
      $this->PaymentDetails = $PaymentDetails;
      $this->ExternalPartnerTrackingDetails = $ExternalPartnerTrackingDetails;
      $this->URI = $URI;
    }

}
