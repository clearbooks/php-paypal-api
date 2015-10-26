<?php

namespace Paypal\Api;

class SubscriptionInfoType
{

    /**
     * @var string $SubscriptionID
     * @access public
     */
    public $SubscriptionID = null;

    /**
     * @var dateTime $SubscriptionDate
     * @access public
     */
    public $SubscriptionDate = null;

    /**
     * @var dateTime $EffectiveDate
     * @access public
     */
    public $EffectiveDate = null;

    /**
     * @var dateTime $RetryTime
     * @access public
     */
    public $RetryTime = null;

    /**
     * @var string $Username
     * @access public
     */
    public $Username = null;

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

    /**
     * @var string $Recurrences
     * @access public
     */
    public $Recurrences = null;

    /**
     * @var SubscriptionTermsType[] $Terms
     * @access public
     */
    public $Terms = null;

    /**
     * @var string $reattempt
     * @access public
     */
    public $reattempt = null;

    /**
     * @var string $recurring
     * @access public
     */
    public $recurring = null;

    /**
     * @param string $SubscriptionID
     * @param dateTime $SubscriptionDate
     * @param dateTime $EffectiveDate
     * @param dateTime $RetryTime
     * @param string $Username
     * @param string $Password
     * @param string $Recurrences
     * @param SubscriptionTermsType[] $Terms
     * @param string $reattempt
     * @param string $recurring
     * @access public
     */
    public function __construct($SubscriptionID, $SubscriptionDate, $EffectiveDate, $RetryTime, $Username, $Password, $Recurrences, $Terms, $reattempt, $recurring)
    {
      $this->SubscriptionID = $SubscriptionID;
      $this->SubscriptionDate = $SubscriptionDate;
      $this->EffectiveDate = $EffectiveDate;
      $this->RetryTime = $RetryTime;
      $this->Username = $Username;
      $this->Password = $Password;
      $this->Recurrences = $Recurrences;
      $this->Terms = $Terms;
      $this->reattempt = $reattempt;
      $this->recurring = $recurring;
    }

}
