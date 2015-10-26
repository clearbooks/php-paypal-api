<?php

namespace Paypal\Api;

class CalculatedShippingRateType
{

    /**
     * @var string $OriginatingPostalCode
     * @access public
     */
    public $OriginatingPostalCode = null;

    /**
     * @var boolean $ShippingIrregular
     * @access public
     */
    public $ShippingIrregular = null;

    /**
     * @var ShippingCarrierDetailsType[] $CarrierDetails
     * @access public
     */
    public $CarrierDetails = null;

    /**
     * @var ShippingPackageCodeType $ShippingPackage
     * @access public
     */
    public $ShippingPackage = null;

    /**
     * @var MeasureType $WeightMajor
     * @access public
     */
    public $WeightMajor = null;

    /**
     * @var MeasureType $WeightMinor
     * @access public
     */
    public $WeightMinor = null;

    /**
     * @param string $OriginatingPostalCode
     * @param boolean $ShippingIrregular
     * @param ShippingCarrierDetailsType[] $CarrierDetails
     * @param ShippingPackageCodeType $ShippingPackage
     * @param MeasureType $WeightMajor
     * @param MeasureType $WeightMinor
     * @access public
     */
    public function __construct($OriginatingPostalCode, $ShippingIrregular, $CarrierDetails, $ShippingPackage, $WeightMajor, $WeightMinor)
    {
      $this->OriginatingPostalCode = $OriginatingPostalCode;
      $this->ShippingIrregular = $ShippingIrregular;
      $this->CarrierDetails = $CarrierDetails;
      $this->ShippingPackage = $ShippingPackage;
      $this->WeightMajor = $WeightMajor;
      $this->WeightMinor = $WeightMinor;
    }

}
