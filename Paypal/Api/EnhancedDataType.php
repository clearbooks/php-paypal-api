<?php

namespace Paypal\Api;

class EnhancedDataType
{

    /**
     * @var AirlineItineraryType $AirlineItinerary
     * @access public
     */
    public $AirlineItinerary = null;

    /**
     * @param AirlineItineraryType $AirlineItinerary
     * @access public
     */
    public function __construct($AirlineItinerary)
    {
      $this->AirlineItinerary = $AirlineItinerary;
    }

}
