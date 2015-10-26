<?php

namespace Paypal\Api;

class SiteHostedPictureType
{

    /**
     * @var anyURI $PictureURL
     * @access public
     */
    public $PictureURL = null;

    /**
     * @var PhotoDisplayCodeType $PhotoDisplay
     * @access public
     */
    public $PhotoDisplay = null;

    /**
     * @var GalleryTypeCodeType $GalleryType
     * @access public
     */
    public $GalleryType = null;

    /**
     * @param anyURI $PictureURL
     * @param PhotoDisplayCodeType $PhotoDisplay
     * @param GalleryTypeCodeType $GalleryType
     * @access public
     */
    public function __construct($PictureURL, $PhotoDisplay, $GalleryType)
    {
      $this->PictureURL = $PictureURL;
      $this->PhotoDisplay = $PhotoDisplay;
      $this->GalleryType = $GalleryType;
    }

}
