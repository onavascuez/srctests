<?php

namespace srctests\SharedKernel\Application\Exception;

use srctests\SharedKernel\Domain\Exception\DomainException;

class GenericApplicationException extends \Exception implements ApplicationException
{
    /**
     * @param string $message
     * @param DomainException|null $previous
     */
    public function __construct(string $message, DomainException $previous = null)
    {
        parent::__construct($message, null, $previous);
    }

}