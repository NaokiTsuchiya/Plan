<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use NaokiTsuchiya\Plan\Exception\AttributeNotFoundException;
use NaokiTsuchiya\Plan\Exception\NotAllowedUserTypeException;
use NaokiTsuchiya\Plan\Type\User\UserInterface;

interface AccessControlInterface
{
    /**
     * @param class-string $class
     *
     * @throws AttributeNotFoundException
     * @throws NotAllowedUserTypeException
     */
    public function __invoke(string $class, UserInterface $user): void;
}
