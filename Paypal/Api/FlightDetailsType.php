<?php

namespace Paypal\Api;

class FlightDetailsType
{

    /**
     * @var string $ConjuctionTicket
     * @access public
     */
    public $ConjuctionTicket = null;

    /**
     * @var string $ExchangeTicket
     * @access public
     */
    public $ExchangeTicket = null;

    /**
     * @var string $CouponNumber
     * @access public
     */
    public $CouponNumber = null;

    /**
     * @var string $ServiceClass
     * @access public
     */
    public $ServiceClass = null;

    /**
     * @var string $TravelDate
     * @access public
     */
    public $TravelDate = null;

    /**
     * @var string $CarrierCode
     * @access public
     */
    public $CarrierCode = null;

    /**
     * @var string $StopOverPermitted
     * @access public
     */
    public $StopOverPermitted = null;

    /**
     * @var string $DepartureAirport
     * @access public
     */
    public $DepartureAirport = null;

    /**
     * @var string $ArrivalAirport
     * @access public
     */
    public $ArrivalAirport = null;

    /**
     * @var string $FlightNumber
     * @access public
     */
    public $FlightNumber = null;

    /**
     * @var string $DepartureTime
     * @access public
     */
    public $DepartureTime = null;

    /**
     * @var string $ArrivalTime
     * @access public
     */
    public $ArrivalTime = null;

    /**
     * @var string $FareBasisCode
     * @access public
     */
    public $FareBasisCode = null;

    /**
     * @var BasicAmountType $Fare
     * @access public
     */
    public $Fare = null;

    /**
     * @var BasicAmountType $Taxes
     * @access public
     */
    public $Taxes = null;

    /**
     * @var BasicAmountType $Fee
     * @access public
     */
    public $Fee = null;

    /**
     * @var string $EndorsementOrRestrictions
     * @access public
     */
    public $EndorsementOrRestrictions = null;

    /**
     * @param string $ConjuctionTicket
     * @param string $ExchangeTicket
     * @param string $CouponNumber
     * @param string $ServiceClass
     * @param string $TravelDate
     * @param string $CarrierCode
     * @param string $StopOverPermitted
     * @param string $DepartureAirport
     * @param string $ArrivalAirport
     * @param string $FlightNumber
     * @param string $DepartureTime
     * @param string $ArrivalTime
     * @param string $FareBasisCode
     * @param BasicAmountType $Fare
     * @param BasicAmountType $Taxes
     * @param BasicAmountType $Fee
     * @param string $EndorsementOrRestrictions
     * @access public
     */
    public function __construct($ConjuctionTicket, $ExchangeTicket, $CouponNumber, $ServiceClass, $TravelDate, $CarrierCode, $StopOverPermitted, $DepartureAirport, $ArrivalAirport, $FlightNumber, $DepartureTime, $ArrivalTime, $FareBasisCode, $Fare, $Taxes, $Fee, $EndorsementOrRestrictions)
    {
      $this->ConjuctionTicket = $ConjuctionTicket;
      $this->ExchangeTicket = $ExchangeTicket;
      $this->CouponNumber = $CouponNumber;
      $this->ServiceClass = $ServiceClass;
      $this->TravelDate = $TravelDate;
      $this->CarrierCode = $CarrierCode;
      $this->StopOverPermitted = $StopOverPermitted;
      $this->DepartureAirport = $DepartureAirport;
      $this->ArrivalAirport = $ArrivalAirport;
      $this->FlightNumber = $FlightNumber;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->FareBasisCode = $FareBasisCode;
      $this->Fare = $Fare;
      $this->Taxes = $Taxes;
      $this->Fee = $Fee;
      $this->EndorsementOrRestrictions = $EndorsementOrRestrictions;
    }

}
