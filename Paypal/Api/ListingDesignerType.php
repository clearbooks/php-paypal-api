<?php

namespace Paypal\Api;

class ListingDesignerType
{

    /**
     * @var int $LayoutID
     * @access public
     */
    public $LayoutID = null;

    /**
     * @var boolean $OptimalPictureSize
     * @access public
     */
    public $OptimalPictureSize = null;

    /**
     * @var int $ThemeID
     * @access public
     */
    public $ThemeID = null;

    /**
     * @param int $LayoutID
     * @param boolean $OptimalPictureSize
     * @param int $ThemeID
     * @access public
     */
    public function __construct($LayoutID, $OptimalPictureSize, $ThemeID)
    {
      $this->LayoutID = $LayoutID;
      $this->OptimalPictureSize = $OptimalPictureSize;
      $this->ThemeID = $ThemeID;
    }

}
