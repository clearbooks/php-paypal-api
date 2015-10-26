<?php

namespace Paypal\Api;

class ReversalReasonCodeType
{
    const __default = 'none';
    const none = 'none';
    const chargeback = 'chargeback';
    const guarantee = 'guarantee';
    const buyercomplaint = 'buyer-complaint';
    const refund = 'refund';
    const other = 'other';


}
