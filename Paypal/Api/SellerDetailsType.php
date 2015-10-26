<?php

namespace Paypal\Api;

class SellerDetailsType
{

    /**
     * @var string $SellerId
     * @access public
     */
    public $SellerId = null;

    /**
     * @var string $SellerUserName
     * @access public
     */
    public $SellerUserName = null;

    /**
     * @var dateTime $SellerRegistrationDate
     * @access public
     */
    public $SellerRegistrationDate = null;

    /**
     * @var string $PayPalAccountID
     * @access public
     */
    public $PayPalAccountID = null;

    /**
     * @var UserIDType $SecureMerchantAccountID
     * @access public
     */
    public $SecureMerchantAccountID = null;

    /**
     * @param string $SellerId
     * @param string $SellerUserName
     * @param dateTime $SellerRegistrationDate
     * @param string $PayPalAccountID
     * @param UserIDType $SecureMerchantAccountID
     * @access public
     */
    public function __construct($SellerId, $SellerUserName, $SellerRegistrationDate, $PayPalAccountID, $SecureMerchantAccountID)
    {
      $this->SellerId = $SellerId;
      $this->SellerUserName = $SellerUserName;
      $this->SellerRegistrationDate = $SellerRegistrationDate;
      $this->PayPalAccountID = $PayPalAccountID;
      $this->SecureMerchantAccountID = $SecureMerchantAccountID;
    }

}
