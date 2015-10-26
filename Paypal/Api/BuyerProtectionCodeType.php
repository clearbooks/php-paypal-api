<?php

namespace Paypal\Api;

class BuyerProtectionCodeType
{
    const __default = 'ItemIneligible';
    const ItemIneligible = 'ItemIneligible';
    const ItemEligible = 'ItemEligible';
    const ItemMarkedIneligible = 'ItemMarkedIneligible';
    const ItemMarkedEligible = 'ItemMarkedEligible';
    const CustomCode = 'CustomCode';


}
