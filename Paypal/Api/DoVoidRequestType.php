<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class DoVoidRequestType extends AbstractRequestType
{

    /**
     * @var string $AuthorizationID
     * @access public
     */
    public $AuthorizationID = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

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
     * @param string $Note
     * @param string $MsgSubID
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $AuthorizationID, $Note, $MsgSubID)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->AuthorizationID = $AuthorizationID;
      $this->Note = $Note;
      $this->MsgSubID = $MsgSubID;
    }

}
