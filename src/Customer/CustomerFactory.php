<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer;

use Gacela\Framework\AbstractFactory;
use GacelaModuleExample\Customer\Domain\Generator\NicknameGenerator;
use GacelaModuleExample\Customer\Domain\Generator\NicknameGeneratorInterface;

class CustomerFactory extends AbstractFactory
{
    public function createNicknameGenerator(): NicknameGeneratorInterface
    {
        return new NicknameGenerator();
    }
}
