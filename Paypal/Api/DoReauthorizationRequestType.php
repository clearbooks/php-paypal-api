<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoReauthorizationRequestType extends AbstractRequestType
{

    /**
     * @var string $AuthorizationID
     * @access public
     */
    public $AuthorizationID = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

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
     * @param string $AuthorizationID
     * @param BasicAmountType $Amount
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $AuthorizationID, $Amount, $MsgSubID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->AuthorizationID = $AuthorizationID;
      $this->Amount = $Amount;
      $this->MsgSubID = $MsgSubID;
    }

}
