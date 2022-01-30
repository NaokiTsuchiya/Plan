<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

use NaokiTsuchiya\Plan\Attribute\Allowed;
use NaokiTsuchiya\Plan\Exception\NotAllowedUserTypeException;
use NaokiTsuchiya\Plan\Type\User\AbstractLoginUser;

#[Allowed(allowUser: [AbstractLoginUser::class])]
final class OnlyLoginUser
{
    public function __construct(
        private UserProviderInterface $userProvider,
        private AccessControlInterface $accessControl
    ) {
    }

    public function __invoke(): string
    {
        $user = $this->userProvider->get();

        try {
            ($this->accessControl)(self::class, $user);
        } catch (NotAllowedUserTypeException $e) {
            return 'Not allowed.';
        }

        return 'Allowed!';
    }
}
