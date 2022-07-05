<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer\Domain\Generator;

use GacelaModuleExample\Shared\CustomerName;

interface NicknameGeneratorInterface
{
    public function generateNickname(CustomerName $customerName): string;
}
