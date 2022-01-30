<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use NaokiTsuchiya\Plan\Type\User\UserInterface;

interface UserProviderInterface
{
    public function get(): UserInterface;
}
