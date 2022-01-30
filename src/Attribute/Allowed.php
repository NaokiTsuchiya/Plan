<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan\Attribute;

use Attribute;
use NaokiTsuchiya\Plan\Type\User\UserInterface;

#[Attribute]
final class Allowed
{
    /** @param non-empty-list<class-string<UserInterface>> $allowUser */
    public function __construct(private array $allowUser)
    {
    }

    public function __invoke(UserInterface $user): bool
    {
        foreach ($this->allowUser as $item) {
            if ($user instanceof $item) {
                return true;
            }
        }

        return false;
    }
}
