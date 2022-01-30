<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan\Type\User;

abstract class AbstractLoginUser implements LoginUserInterface
{
    public function __construct(
        private string $id,
        private string $name
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
