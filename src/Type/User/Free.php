<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan\Type\User;

use NaokiTsuchiya\Plan\Type\Plan\FreePlan;

final class Free extends AbstractLoginUser
{
    private FreePlan $plan;

    public function __construct(string $id, string $name)
    {
        $this->plan = new FreePlan();
        parent::__construct($id, $name);
    }

    public function getPlanName(): string
    {
        return $this->plan->name;
    }
}
