<?php

namespace Paypal\Api;

class OtherPaymentMethodDetailsType
{

    /**
     * @var string $OtherPaymentMethodId
     * @access public
     */
    public $OtherPaymentMethodId = null;

    /**
     * @var string $OtherPaymentMethodType
     * @access public
     */
    public $OtherPaymentMethodType = null;

    /**
     * @var string $OtherPaymentMethodLabel
     * @access public
     */
    public $OtherPaymentMethodLabel = null;

    /**
     * @var string $OtherPaymentMethodLabelDescription
     * @access public
     */
    public $OtherPaymentMethodLabelDescription = null;

    /**
     * @var string $OtherPaymentMethodLongDescriptionTitle
     * @access public
     */
    public $OtherPaymentMethodLongDescriptionTitle = null;

    /**
     * @var string $OtherPaymentMethodLongDescription
     * @access public
     */
    public $OtherPaymentMethodLongDescription = null;

    /**
     * @var string $OtherPaymentMethodIcon
     * @access public
     */
    public $OtherPaymentMethodIcon = null;

    /**
     * @var boolean $OtherPaymentMethodHideLabel
     * @access public
     */
    public $OtherPaymentMethodHideLabel = null;

    /**
     * @param string $OtherPaymentMethodId
     * @param string $OtherPaymentMethodType
     * @param string $OtherPaymentMethodLabel
     * @param string $OtherPaymentMethodLabelDescription
     * @param string $OtherPaymentMethodLongDescriptionTitle
     * @param string $OtherPaymentMethodLongDescription
     * @param string $OtherPaymentMethodIcon
     * @param boolean $OtherPaymentMethodHideLabel
     * @access public
     */
    public function __construct($OtherPaymentMethodId, $OtherPaymentMethodType, $OtherPaymentMethodLabel, $OtherPaymentMethodLabelDescription, $OtherPaymentMethodLongDescriptionTitle, $OtherPaymentMethodLongDescription, $OtherPaymentMethodIcon, $OtherPaymentMethodHideLabel)
    {
      $this->OtherPaymentMethodId = $OtherPaymentMethodId;
      $this->OtherPaymentMethodType = $OtherPaymentMethodType;
      $this->OtherPaymentMethodLabel = $OtherPaymentMethodLabel;
      $this->OtherPaymentMethodLabelDescription = $OtherPaymentMethodLabelDescription;
      $this->OtherPaymentMethodLongDescriptionTitle = $OtherPaymentMethodLongDescriptionTitle;
      $this->OtherPaymentMethodLongDescription = $OtherPaymentMethodLongDescription;
      $this->OtherPaymentMethodIcon = $OtherPaymentMethodIcon;
      $this->OtherPaymentMethodHideLabel = $OtherPaymentMethodHideLabel;
    }

}
