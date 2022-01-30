<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan\Type\User;

interface LoginUserInterface extends UserInterface
{
    public function getId(): string;

    public function getName(): string;

    public function getPlanName(): string;
}
