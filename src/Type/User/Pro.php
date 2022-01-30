<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan\Type\User;

use NaokiTsuchiya\Plan\Type\Plan\ProPlan;

final class Pro extends AbstractLoginUser
{
    private ProPlan $plan;

    public function __construct(string $id, string $name)
    {
        $this->plan = new ProPlan();
        parent::__construct($id, $name);
    }

    public function getPlanName(): string
    {
        return $this->plan->name;
    }
}
