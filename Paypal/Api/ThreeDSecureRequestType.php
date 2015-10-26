<?php

namespace Paypal\Api;

class ThreeDSecureRequestType
{

    /**
     * @var string $Eci3ds
     * @access public
     */
    public $Eci3ds = null;

    /**
     * @var string $Cavv
     * @access public
     */
    public $Cavv = null;

    /**
     * @var string $Xid
     * @access public
     */
    public $Xid = null;

    /**
     * @var string $MpiVendor3ds
     * @access public
     */
    public $MpiVendor3ds = null;

    /**
     * @var string $AuthStatus3ds
     * @access public
     */
    public $AuthStatus3ds = null;

    /**
     * @param string $Eci3ds
     * @param string $Cavv
     * @param string $Xid
     * @param string $MpiVendor3ds
     * @param string $AuthStatus3ds
     * @access public
     */
    public function __construct($Eci3ds, $Cavv, $Xid, $MpiVendor3ds, $AuthStatus3ds)
    {
      $this->Eci3ds = $Eci3ds;
      $this->Cavv = $Cavv;
      $this->Xid = $Xid;
      $this->MpiVendor3ds = $MpiVendor3ds;
      $this->AuthStatus3ds = $AuthStatus3ds;
    }

}
