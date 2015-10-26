<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class ManagePendingTransactionStatusRequestType extends AbstractRequestType
{

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @var FMFPendingTransactionActionType $Action
     * @access public
     */
    public $Action = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param TransactionId $TransactionID
     * @param FMFPendingTransactionActionType $Action
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $TransactionID, $Action)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->TransactionID = $TransactionID;
      $this->Action = $Action;
    }

}
