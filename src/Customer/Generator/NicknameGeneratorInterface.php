<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer\Generator;

use GacelaModuleExample\Shared\CustomerName;

interface NicknameGeneratorInterface
{
    public function generateNickname(CustomerName $customerName): string;
}
