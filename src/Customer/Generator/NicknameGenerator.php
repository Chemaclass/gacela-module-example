<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer\Generator;

use GacelaModuleExample\Shared\CustomerName;

final class NicknameGenerator implements NicknameGeneratorInterface
{
    public function generateNickname(CustomerName $customerName): string
    {
        if ($customerName->getFirstName() === '' && $customerName->getLastName() === '') {
            return 'empty';
        }

        if ($customerName->getLastName() === '') {
            return strtolower($customerName->getFirstName());
        }

        if ($customerName->getFirstName() === '') {
            return strtolower($customerName->getLastName());
        }

        return sprintf(
            '%s-%s',
            strtolower($customerName->getFirstName()),
            strtolower($customerName->getLastName())
        );
    }
}
