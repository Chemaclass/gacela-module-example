<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer;

use GacelaModuleExample\Shared\CustomerName;

interface CustomerFacadeInterface
{
    public function generateNickname(CustomerName $customerName): string;
}
