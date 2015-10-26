<?php

namespace Paypal\Api;

class AckCodeType
{
    const __default = 'Success';
    const Success = 'Success';
    const Failure = 'Failure';
    const Warning = 'Warning';
    const SuccessWithWarning = 'SuccessWithWarning';
    const FailureWithWarning = 'FailureWithWarning';
    const PartialSuccess = 'PartialSuccess';
    const CustomCode = 'CustomCode';


}
