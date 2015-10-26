<?php

namespace Paypal\Api;

class StorefrontType
{

    /**
     * @var int $StoreCategoryID
     * @access public
     */
    public $StoreCategoryID = null;

    /**
     * @var anyURI $StoreURL
     * @access public
     */
    public $StoreURL = null;

    /**
     * @param int $StoreCategoryID
     * @param anyURI $StoreURL
     * @access public
     */
    public function __construct($StoreCategoryID, $StoreURL)
    {
      $this->StoreCategoryID = $StoreCategoryID;
      $this->StoreURL = $StoreURL;
    }

}
