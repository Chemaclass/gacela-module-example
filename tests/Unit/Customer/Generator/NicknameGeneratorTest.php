<?php

declare(strict_types=1);

namespace GacelaModuleExampleTest\Unit\Customer\Generator;

use GacelaModuleExample\Customer\Generator\NicknameGenerator;
use GacelaModuleExample\Shared\CustomerName;
use PHPUnit\Framework\TestCase;

final class NicknameGeneratorTest extends TestCase
{
    private NicknameGenerator $generator;

    protected function setUp(): void
    {
        $this->generator = new NicknameGenerator();
    }

    public function test_first_and_last_name(): void
    {
        $customerName = new CustomerName('firstName', 'lastName');
        $actual = $this->generator->generateNickname($customerName);

        self::assertEquals('firstname-lastname', $actual);
    }
}
