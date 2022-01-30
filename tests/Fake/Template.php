<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use NaokiTsuchiya\Plan\Exception\UnknownUserTypeException;
use NaokiTsuchiya\Plan\Type\User\Free;
use NaokiTsuchiya\Plan\Type\User\Guest;
use NaokiTsuchiya\Plan\Type\User\Pro;
use NaokiTsuchiya\Plan\Type\User\UserInterface;

class Template
{
    public function __construct(private UserInterface $user)
    {
    }

    public function render(Content $content): string
    {
       return (string) match($this->user::class) {
           Guest::class => new LoginForm(),
           Free::class => new PaymentForm(),
           Pro::class => $content,
           default => throw new UnknownUserTypeException()
       };
    }
}
