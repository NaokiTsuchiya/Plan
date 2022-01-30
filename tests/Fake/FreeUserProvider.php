<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use NaokiTsuchiya\Plan\Type\User\Free;
use NaokiTsuchiya\Plan\Type\User\UserInterface;

final class FreeUserProvider implements UserProviderInterface
{
    public function get(): UserInterface
    {
        return new Free('foo', 'name');
    }
}
