<?php

namespace Paypal\Api;

include_once('AbstractRequestType.php');

class MassPayRequestType extends AbstractRequestType
{

    /**
     * @var string $EmailSubject
     * @access public
     */
    public $EmailSubject = null;

    /**
     * @var ReceiverInfoCodeType $ReceiverType
     * @access public
     */
    public $ReceiverType = null;

    /**
     * @var string $ButtonSource
     * @access public
     */
    public $ButtonSource = null;

    /**
     * @var MassPayRequestItemType $MassPayItem
     * @access public
     */
    public $MassPayItem = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $Version
     * @param string $any
     * @param string $EmailSubject
     * @param ReceiverInfoCodeType $ReceiverType
     * @param string $ButtonSource
     * @param MassPayRequestItemType $MassPayItem
     * @access public
     */
    public function __construct($DetailLevel, $ErrorLanguage, $Version, $any, $EmailSubject, $ReceiverType, $ButtonSource, $MassPayItem)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $Version, $any);
      $this->EmailSubject = $EmailSubject;
      $this->ReceiverType = $ReceiverType;
      $this->ButtonSource = $ButtonSource;
      $this->MassPayItem = $MassPayItem;
    }

}
