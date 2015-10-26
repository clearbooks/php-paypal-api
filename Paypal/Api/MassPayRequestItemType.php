<?php

namespace Paypal\Api;

class MassPayRequestItemType
{

    /**
     * @var EmailAddressType $ReceiverEmail
     * @access public
     */
    public $ReceiverEmail = null;

    /**
     * @var string $ReceiverPhone
     * @access public
     */
    public $ReceiverPhone = null;

    /**
     * @var UserIDType $ReceiverID
     * @access public
     */
    public $ReceiverID = null;

    /**
     * @var BasicAmountType $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $UniqueId
     * @access public
     */
    public $UniqueId = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @param EmailAddressType $ReceiverEmail
     * @param string $ReceiverPhone
     * @param UserIDType $ReceiverID
     * @param BasicAmountType $Amount
     * @param string $UniqueId
     * @param string $Note
     * @access public
     */
    public function __construct($ReceiverEmail, $ReceiverPhone, $ReceiverID, $Amount, $UniqueId, $Note)
    {
      $this->ReceiverEmail = $ReceiverEmail;
      $this->ReceiverPhone = $ReceiverPhone;
      $this->ReceiverID = $ReceiverID;
      $this->Amount = $Amount;
      $this->UniqueId = $UniqueId;
      $this->Note = $Note;
    }

}
