<?php

declare(strict_types=1);

namespace GacelaModuleExample\Customer;

use Gacela\Framework\AbstractFacade;
use GacelaModuleExample\Shared\CustomerName;

/**
 * @method CustomerFactory getFactory()
 */
class CustomerFacade extends AbstractFacade implements CustomerFacadeInterface
{
    public function generateNickname(CustomerName $customerName): string
    {
        return $this->getFactory()
            ->createNicknameGenerator()
            ->generateNickname($customerName);
    }
}
