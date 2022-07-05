<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer;

use Gacela\Framework\AbstractFactory;
use GacelaModuleExample\Customer\Generator\NicknameGenerator;
use GacelaModuleExample\Customer\Generator\NicknameGeneratorInterface;

class CustomerFactory extends AbstractFactory
{
    public function createNicknameGenerator(): NicknameGeneratorInterface
    {
        return new NicknameGenerator();
    }
}
