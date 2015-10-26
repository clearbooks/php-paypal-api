<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoReferenceTransactionRequestType extends AbstractRequestType
{

    /**
     * @var DoReferenceTransactionRequestDetailsType $DoReferenceTransactionRequestDetails
     * @access public
     */
    public $DoReferenceTransactionRequestDetails = null;

    /**
     * @var int $ReturnFMFDetails
     * @access public
     */
    public $ReturnFMFDetails = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param DoReferenceTransactionRequestDetailsType $DoReferenceTransactionRequestDetails
     * @param int $ReturnFMFDetails
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $DoReferenceTransactionRequestDetails, $ReturnFMFDetails)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->DoReferenceTransactionRequestDetails = $DoReferenceTransactionRequestDetails;
      $this->ReturnFMFDetails = $ReturnFMFDetails;
    }

}
