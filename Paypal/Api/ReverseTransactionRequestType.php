<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class ReverseTransactionRequestType extends AbstractRequestType
{

    /**
     * @var ReverseTransactionRequestDetailsType $ReverseTransactionRequestDetails
     * @access public
     */
    public $ReverseTransactionRequestDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param ReverseTransactionRequestDetailsType $ReverseTransactionRequestDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $ReverseTransactionRequestDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->ReverseTransactionRequestDetails = $ReverseTransactionRequestDetails;
    }

}
