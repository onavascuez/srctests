<?php

namespace srctests\SharedKernel\Infrastructure\Exception;

use srctests\SharedKernel\Application\Exception\ApplicationException;

class GenericInfrastructureException extends \Exception implements InfrastructureException
{
    /**
     * @param string $message
     * @param ApplicationException|null $previous
     */
    public function __construct(string $message, ApplicationException $previous = null)
    {
        parent::__construct($message, null, $previous);
    }
}