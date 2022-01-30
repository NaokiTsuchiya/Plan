<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use PHPUnit\Framework\TestCase;

class PlanTest extends TestCase
{
    /** @var Plan */
    protected $plan;

    protected function setUp(): void
    {
        $this->plan = new Plan();
    }

    public function testIsInstanceOfPlan(): void
    {
        $actual = $this->plan;
        $this->assertInstanceOf(Plan::class, $actual);
    }
}
