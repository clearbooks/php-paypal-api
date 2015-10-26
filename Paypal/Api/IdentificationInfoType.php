<?php

namespace Paypal\Api;

class IdentificationInfoType
{

    /**
     * @var MobileIDInfoType $MobileIDInfo
     * @access public
     */
    public $MobileIDInfo = null;

    /**
     * @var RememberMeIDInfoType $RememberMeIDInfo
     * @access public
     */
    public $RememberMeIDInfo = null;

    /**
     * @var IdentityTokenInfoType $IdentityTokenInfo
     * @access public
     */
    public $IdentityTokenInfo = null;

    /**
     * @param MobileIDInfoType $MobileIDInfo
     * @param RememberMeIDInfoType $RememberMeIDInfo
     * @param IdentityTokenInfoType $IdentityTokenInfo
     * @access public
     */
    public function __construct($MobileIDInfo, $RememberMeIDInfo, $IdentityTokenInfo)
    {
      $this->MobileIDInfo = $MobileIDInfo;
      $this->RememberMeIDInfo = $RememberMeIDInfo;
      $this->IdentityTokenInfo = $IdentityTokenInfo;
    }

}
