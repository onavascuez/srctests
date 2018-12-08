<?php

namespace srctests\SharedKernel\Domain\Assertion;

use Assert\InvalidArgumentException;
use srctests\SharedKernel\Domain\Exception\DomainException;

class DomainAssertionFailedException extends InvalidArgumentException implements DomainException
{
}