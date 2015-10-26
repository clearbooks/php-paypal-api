<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoCaptureRequestType extends AbstractRequestType
{

    /**
     * @var AuthorizationId $AuthorizationID
     * @access public
     */
    public $AuthorizationID = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var CompleteCodeType $CompleteType
     * @access public
     */
    public $CompleteType = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var EnhancedDataType $EnhancedData
     * @access public
     */
    public $EnhancedData = null;

    /**
     * @var string $Descriptor
     * @access public
     */
    public $Descriptor = null;

    /**
     * @var MerchantStoreDetailsType $MerchantStoreDetails
     * @access public
     */
    public $MerchantStoreDetails = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @var MerchantDataType $MerchantData
     * @access public
     */
    public $MerchantData = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param AuthorizationId $AuthorizationID
     * @param BasicAmountType $Amount
     * @param CompleteCodeType $CompleteType
     * @param string $Note
     * @param string $InvoiceID
     * @param EnhancedDataType $EnhancedData
     * @param string $Descriptor
     * @param MerchantStoreDetailsType $MerchantStoreDetails
     * @param string $MsgSubID
     * @param MerchantDataType $MerchantData
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $AuthorizationID, $Amount, $CompleteType, $Note, $InvoiceID, $EnhancedData, $Descriptor, $MerchantStoreDetails, $MsgSubID, $MerchantData)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->AuthorizationID = $AuthorizationID;
      $this->Amount = $Amount;
      $this->CompleteType = $CompleteType;
      $this->Note = $Note;
      $this->InvoiceID = $InvoiceID;
      $this->EnhancedData = $EnhancedData;
      $this->Descriptor = $Descriptor;
      $this->MerchantStoreDetails = $MerchantStoreDetails;
      $this->MsgSubID = $MsgSubID;
      $this->MerchantData = $MerchantData;
    }

}
