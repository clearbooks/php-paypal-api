<?php

namespace Paypal\Api;

class PaymentStatusCodeType
{
    const __default = 'None';
    const None = 'None';
    const Completed = 'Completed';
    const Failed = 'Failed';
    const Pending = 'Pending';
    const Denied = 'Denied';
    const Refunded = 'Refunded';
    const Reversed = 'Reversed';
    const CanceledReversal = 'Canceled-Reversal';
    const Processed = 'Processed';
    const PartiallyRefunded = 'Partially-Refunded';
    const Voided = 'Voided';
    const Expired = 'Expired';
    const InProgress = 'In-Progress';
    const Created = 'Created';
    const CompletedFundsHeld = 'Completed-Funds-Held';
    const Instant = 'Instant';
    const Delayed = 'Delayed';


}
