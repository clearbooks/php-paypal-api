<?php

namespace Paypal\Api;

class CategoryType
{

    /**
     * @var boolean $AutoPayEnabled
     * @access public
     */
    public $AutoPayEnabled = null;

    /**
     * @var boolean $B2BVATEnabled
     * @access public
     */
    public $B2BVATEnabled = null;

    /**
     * @var boolean $CatalogEnabled
     * @access public
     */
    public $CatalogEnabled = null;

    /**
     * @var string $CategoryID
     * @access public
     */
    public $CategoryID = null;

    /**
     * @var int $CategoryLevel
     * @access public
     */
    public $CategoryLevel = null;

    /**
     * @var string $CategoryName
     * @access public
     */
    public $CategoryName = null;

    /**
     * @var string[] $CategoryParentID
     * @access public
     */
    public $CategoryParentID = null;

    /**
     * @var string[] $CategoryParentName
     * @access public
     */
    public $CategoryParentName = null;

    /**
     * @var string[] $CSIDList
     * @access public
     */
    public $CSIDList = null;

    /**
     * @var boolean $Expired
     * @access public
     */
    public $Expired = null;

    /**
     * @var boolean $IntlAutosFixedCat
     * @access public
     */
    public $IntlAutosFixedCat = null;

    /**
     * @var boolean $LeafCategory
     * @access public
     */
    public $LeafCategory = null;

    /**
     * @var boolean $Virtual
     * @access public
     */
    public $Virtual = null;

    /**
     * @param boolean $AutoPayEnabled
     * @param boolean $B2BVATEnabled
     * @param boolean $CatalogEnabled
     * @param string $CategoryID
     * @param int $CategoryLevel
     * @param string $CategoryName
     * @param string[] $CategoryParentID
     * @param string[] $CategoryParentName
     * @param string[] $CSIDList
     * @param boolean $Expired
     * @param boolean $IntlAutosFixedCat
     * @param boolean $LeafCategory
     * @param boolean $Virtual
     * @access public
     */
    public function __construct($AutoPayEnabled, $B2BVATEnabled, $CatalogEnabled, $CategoryID, $CategoryLevel, $CategoryName, $CategoryParentID, $CategoryParentName, $CSIDList, $Expired, $IntlAutosFixedCat, $LeafCategory, $Virtual)
    {
      $this->AutoPayEnabled = $AutoPayEnabled;
      $this->B2BVATEnabled = $B2BVATEnabled;
      $this->CatalogEnabled = $CatalogEnabled;
      $this->CategoryID = $CategoryID;
      $this->CategoryLevel = $CategoryLevel;
      $this->CategoryName = $CategoryName;
      $this->CategoryParentID = $CategoryParentID;
      $this->CategoryParentName = $CategoryParentName;
      $this->CSIDList = $CSIDList;
      $this->Expired = $Expired;
      $this->IntlAutosFixedCat = $IntlAutosFixedCat;
      $this->LeafCategory = $LeafCategory;
      $this->Virtual = $Virtual;
    }

}
