<?php

namespace srctests\SharedKernel\Domain\Service;

use srctests\SharedKernel\Domain\ValueObject\EntityId;
use srctests\SharedKernel\Domain\ValueObject\IntegerId;
use srctests\SharedKernel\Domain\ValueObject\Uuid;

interface IdentityGeneratorInterface
{
    /**
     * @param $className
     * @return EntityId|IntegerId|Uuid
     */
    public function generate($className);
}
