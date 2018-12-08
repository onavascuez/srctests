<?php

namespace srctests\SharedKernel\Domain\Entity;

use srctests\SharedKernel\Domain\ValueObject\EntityId;

interface EntityInterface
{
    /**
     * @return EntityId
     */
    public function getId();
}