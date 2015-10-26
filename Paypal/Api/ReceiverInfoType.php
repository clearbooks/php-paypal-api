<?php

namespace Paypal\Api;

class ReceiverInfoType
{

    /**
     * @var EmailAddressType $Business
     * @access public
     */
    public $Business = null;

    /**
     * @var EmailAddressType $Receiver
     * @access public
     */
    public $Receiver = null;

    /**
     * @var UserIDType $ReceiverID
     * @access public
     */
    public $ReceiverID = null;

    /**
     * @param EmailAddressType $Business
     * @param EmailAddressType $Receiver
     * @param UserIDType $ReceiverID
     * @access public
     */
    public function __construct($Business, $Receiver, $ReceiverID)
    {
      $this->Business = $Business;
      $this->Receiver = $Receiver;
      $this->ReceiverID = $ReceiverID;
    }

}
