<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use Koriym\Attributes\AttributeReader;
use PHPUnit\Framework\TestCase;

class AccessControlTest extends TestCase
{
    private AccessControl $accessControl;

    protected function setUp(): void
    {
        $this->accessControl = new AccessControl(new AttributeReader());
    }

    public function testOnlyLoginUser(): void
    {
        $fake = new OnlyLoginUser(
            userProvider: new FreeUserProvider(),
            accessControl: $this->accessControl
        );
        $actual = $fake();
        $this->assertSame($actual, 'Allowed!');
    }

    public function testOnlyProUser(): void
    {
        $fake = new OnlyProUser(
            userProvider: new FreeUserProvider(),
            accessControl: $this->accessControl
        );
        $actual = $fake();
        $this->assertSame($actual, 'Not allowed.');
        $fake = new OnlyProUser(new ProUserProvider(), $this->accessControl);
        $actual = $fake();
        $this->assertSame($actual, 'Allowed!');
    }
}
