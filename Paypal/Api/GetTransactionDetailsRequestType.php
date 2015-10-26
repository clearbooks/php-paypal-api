<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class GetTransactionDetailsRequestType extends AbstractRequestType
{

    /**
     * @var TransactionId $TransactionID
     * @access public
     */
    public $TransactionID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param TransactionId $TransactionID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $TransactionID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->TransactionID = $TransactionID;
    }

}
