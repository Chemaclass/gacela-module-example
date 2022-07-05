<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer\Generator;

use GacelaModuleExample\Shared\CustomerName;

final class NicknameGenerator
{
    public function generateNickname(CustomerName $customerName): string
    {
        return sprintf(
            '%s-%s',
            strtolower($customerName->getFirstName()),
            strtolower($customerName->getLastName())
        );
    }
}
