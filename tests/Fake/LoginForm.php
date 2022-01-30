<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

final class LoginForm
{
    public function __toString(): string
    {
        return <<<HTML
<div>
  <ul>
    <li><a href="/path/to/login">Login</a></li>
    <li><a href="/path/to/registration">Registration</a></li>
  </ul>
</div>
HTML;

    }
}
