<?php

namespace srctests\SharedKernel\Infrastructure\Service;

use srctests\SharedKernel\Domain\Service\IdentityGeneratorInterface;
use srctests\SharedKernel\Domain\ValueObject\Uuid;
use srctests\SharedKernel\Infrastructure\Exception\InvalidArgumentException;
use Illuminate\Support\Str;

class IdentityGenerator implements IdentityGeneratorInterface
{
    /**
     * @param $className
     * @return Uuid
     */
    public function generate($className) : Uuid
    {
        $this->guardAgainstInvalidClassName($className);

        $uuid = Str::uuid(); // TODO - Evaluate if this is better than use ramsey/uuid to avoid malfunctions.

        return Uuid::fromString($uuid->toString());
    }

    /**
     * @param $className
     * @throws InvalidArgumentException
     */
    private function guardAgainstInvalidClassName($className)
    {
        if ($className !== UUid::class) {
            throw new InvalidArgumentException(
                sprintf(
                    "Can't generate an identity generator from %s",
                    $className
                )
            );
        }
    }
}
