<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoCancelRequestType extends AbstractRequestType
{

    /**
     * @var string $CancelMsgSubID
     * @access public
     */
    public $CancelMsgSubID = null;

    /**
     * @var APIType $APIType
     * @access public
     */
    public $APIType = null;

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
     * @param string $CancelMsgSubID
     * @param APIType $APIType
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $CancelMsgSubID, $APIType, $MsgSubID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->CancelMsgSubID = $CancelMsgSubID;
      $this->APIType = $APIType;
      $this->MsgSubID = $MsgSubID;
    }

}
