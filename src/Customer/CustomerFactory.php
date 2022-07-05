<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer;

use Gacela\Framework\AbstractFactory;
use GacelaModuleExample\Customer\Generator\NicknameGenerator;

class CustomerFactory extends AbstractFactory
{
    public function createNicknameGenerator(): NicknameGenerator
    {
        return new NicknameGenerator();
    }
}
