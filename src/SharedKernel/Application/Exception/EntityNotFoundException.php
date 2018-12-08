<?php

namespace srctests\SharedKernel\Application\Exception;

use \srctests\SharedKernel\Domain\Exception\EntityNotFoundException as DomainEntityNotFoundException;

class EntityNotFoundException extends \Exception implements ApplicationException
{
    /**
     * @param string $message
     * @param DomainEntityNotFoundException $previous
     */
    public function __construct(string $message, DomainEntityNotFoundException $previous)
    {
        parent::__construct($message, null, $previous);
    }
}