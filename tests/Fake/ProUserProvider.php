<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use NaokiTsuchiya\Plan\Type\User\Pro;
use NaokiTsuchiya\Plan\Type\User\UserInterface;

final class ProUserProvider implements UserProviderInterface
{
    public function get(): UserInterface
    {
        return new Pro('foo', 'name');
    }
}
