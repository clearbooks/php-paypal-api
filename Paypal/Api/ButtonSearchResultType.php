<?php

namespace Paypal\Api;

class ButtonSearchResultType
{

    /**
     * @var string $HostedButtonID
     * @access public
     */
    public $HostedButtonID = null;

    /**
     * @var string $ButtonType
     * @access public
     */
    public $ButtonType = null;

    /**
     * @var string $ItemName
     * @access public
     */
    public $ItemName = null;

    /**
     * @var dateTime $ModifyDate
     * @access public
     */
    public $ModifyDate = null;

    /**
     * @param string $HostedButtonID
     * @param string $ButtonType
     * @param string $ItemName
     * @param dateTime $ModifyDate
     * @access public
     */
    public function __construct($HostedButtonID, $ButtonType, $ItemName, $ModifyDate)
    {
      $this->HostedButtonID = $HostedButtonID;
      $this->ButtonType = $ButtonType;
      $this->ItemName = $ItemName;
      $this->ModifyDate = $ModifyDate;
    }

}
