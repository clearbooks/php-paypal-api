<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoUATPAuthorizationRequestType extends AbstractRequestType
{

    /**
     * @var UATPDetailsType $UATPDetails
     * @access public
     */
    public $UATPDetails = null;

    /**
     * @var TransactionEntityType $TransactionEntity
     * @access public
     */
    public $TransactionEntity = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $InvoiceID
     * @access public
     */
    public $InvoiceID = null;

    /**
     * @var string $MsgSubID
     * @access public
     */
    public $MsgSubID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param UATPDetailsType $UATPDetails
     * @param TransactionEntityType $TransactionEntity
     * @param BasicAmountType $Amount
     * @param string $InvoiceID
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $UATPDetails, $TransactionEntity, $Amount, $InvoiceID, $MsgSubID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->UATPDetails = $UATPDetails;
      $this->TransactionEntity = $TransactionEntity;
      $this->Amount = $Amount;
      $this->InvoiceID = $InvoiceID;
      $this->MsgSubID = $MsgSubID;
    }

}
