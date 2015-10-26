<?php

namespace Paypal\Api;

class VendorHostedPictureType
{

    /**
     * @var anyURI $PictureURL
     * @access public
     */
    public $PictureURL = null;

    /**
     * @var anyURI $GalleryURL
     * @access public
     */
    public $GalleryURL = null;

    /**
     * @var GalleryTypeCodeType $GalleryType
     * @access public
     */
    public $GalleryType = null;

    /**
     * @param anyURI $PictureURL
     * @param anyURI $GalleryURL
     * @param GalleryTypeCodeType $GalleryType
     * @access public
     */
    public function __construct($PictureURL, $GalleryURL, $GalleryType)
    {
      $this->PictureURL = $PictureURL;
      $this->GalleryURL = $GalleryURL;
      $this->GalleryType = $GalleryType;
    }

}
