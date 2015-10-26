<?php

namespace Paypal\Api;

class ExternalRememberMeOwnerDetailsType
{

    /**
     * @var string $ExternalRememberMeOwnerIDType
     * @access public
     */
    public $ExternalRememberMeOwnerIDType = null;

    /**
     * @var string $ExternalRememberMeOwnerID
     * @access public
     */
    public $ExternalRememberMeOwnerID = null;

    /**
     * @param string $ExternalRememberMeOwnerIDType
     * @param string $ExternalRememberMeOwnerID
     * @access public
     */
    public function __construct($ExternalRememberMeOwnerIDType, $ExternalRememberMeOwnerID)
    {
      $this->ExternalRememberMeOwnerIDType = $ExternalRememberMeOwnerIDType;
      $this->ExternalRememberMeOwnerID = $ExternalRememberMeOwnerID;
    }

}
