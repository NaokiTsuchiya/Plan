<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use Doctrine\Common\Annotations\Reader;
use NaokiTsuchiya\Plan\Attribute\Allowed;
use NaokiTsuchiya\Plan\Exception\AttributeNotFoundException;
use NaokiTsuchiya\Plan\Exception\NotAllowedUserTypeException;
use NaokiTsuchiya\Plan\Type\User\UserInterface;
use ReflectionClass;

final class AccessControl implements AccessControlInterface
{
    public function __construct(private Reader $reader)
    {
    }

    /** @inheritDoc */
    public function __invoke(string $class, UserInterface $user): void
    {
        $reflectionClass = new ReflectionClass($class);
        $attribute = $this->reader->getClassAnnotation(
            class: $reflectionClass,
            annotationName: Allowed::class
        );

        if ($attribute === null) {
            throw new AttributeNotFoundException();
        }

        if (! $attribute($user)) {
            throw new NotAllowedUserTypeException();
        }
    }
}
