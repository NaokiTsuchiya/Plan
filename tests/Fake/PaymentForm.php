<?php
declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

final class PaymentForm
{
    public function __toString(): string
    {
        return <<<HTML
<div><a href="/path/to/payment">Payment</a></div>
HTML;

    }
}
