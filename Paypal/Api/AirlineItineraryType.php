<?php

namespace Paypal\Api;

class AirlineItineraryType
{

    /**
     * @var string $PassengerName
     * @access public
     */
    public $PassengerName = null;

    /**
     * @var string $IssueDate
     * @access public
     */
    public $IssueDate = null;

    /**
     * @var string $TravelAgencyName
     * @access public
     */
    public $TravelAgencyName = null;

    /**
     * @var string $TravelAgencyCode
     * @access public
     */
    public $TravelAgencyCode = null;

    /**
     * @var string $TicketNumber
     * @access public
     */
    public $TicketNumber = null;

    /**
     * @var string $IssuingCarrierCode
     * @access public
     */
    public $IssuingCarrierCode = null;

    /**
     * @var string $CustomerCode
     * @access public
     */
    public $CustomerCode = null;

    /**
     * @var BasicAmountType $TotalFare
     * @access public
     */
    public $TotalFare = null;

    /**
     * @var BasicAmountType $TotalTaxes
     * @access public
     */
    public $TotalTaxes = null;

    /**
     * @var BasicAmountType $TotalFee
     * @access public
     */
    public $TotalFee = null;

    /**
     * @var string $RestrictedTicket
     * @access public
     */
    public $RestrictedTicket = null;

    /**
     * @var string $ClearingSequence
     * @access public
     */
    public $ClearingSequence = null;

    /**
     * @var string $ClearingCount
     * @access public
     */
    public $ClearingCount = null;

    /**
     * @var FlightDetailsType[] $FlightDetails
     * @access public
     */
    public $FlightDetails = null;

    /**
     * @param string $PassengerName
     * @param string $IssueDate
     * @param string $TravelAgencyName
     * @param string $TravelAgencyCode
     * @param string $TicketNumber
     * @param string $IssuingCarrierCode
     * @param string $CustomerCode
     * @param BasicAmountType $TotalFare
     * @param BasicAmountType $TotalTaxes
     * @param BasicAmountType $TotalFee
     * @param string $RestrictedTicket
     * @param string $ClearingSequence
     * @param string $ClearingCount
     * @param FlightDetailsType[] $FlightDetails
     * @access public
     */
    public function __construct($PassengerName, $IssueDate, $TravelAgencyName, $TravelAgencyCode, $TicketNumber, $IssuingCarrierCode, $CustomerCode, $TotalFare, $TotalTaxes, $TotalFee, $RestrictedTicket, $ClearingSequence, $ClearingCount, $FlightDetails)
    {
      $this->PassengerName = $PassengerName;
      $this->IssueDate = $IssueDate;
      $this->TravelAgencyName = $TravelAgencyName;
      $this->TravelAgencyCode = $TravelAgencyCode;
      $this->TicketNumber = $TicketNumber;
      $this->IssuingCarrierCode = $IssuingCarrierCode;
      $this->CustomerCode = $CustomerCode;
      $this->TotalFare = $TotalFare;
      $this->TotalTaxes = $TotalTaxes;
      $this->TotalFee = $TotalFee;
      $this->RestrictedTicket = $RestrictedTicket;
      $this->ClearingSequence = $ClearingSequence;
      $this->ClearingCount = $ClearingCount;
      $this->FlightDetails = $FlightDetails;
    }

}
